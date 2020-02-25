<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__.'/../vendor/autoload.php';

/**
 * Creates the Slim App/Router
 *
 * @param \ScratchpadsStats\Storage $db Optional scratchapds stats storage instance
 * @param \GuzzleHttp\HandlerStack $guzzleHandlers Optional handlers to feed to guzzle clients
 * @return \Slim\App The created app
 */
function createApp($db = null, $guzzleHandlers = null) {
	if(!$db) {
		$db = new \ScratchpadsStats\Storage(
			getenv('DATABASE_CONNECTION'),
			getenv('DATABASE_USER'),
			getenv('DATABASE_PASSWORD')
		);
	}

	// I like Slim for its callback-based route handling api but it does try to be
	// uneccesarily classical about everything else.
	$app = \Slim\Factory\AppFactory::create();

	// Might want to add handlers e.g. for testing
	$getGuzzle = function($args = []) use($guzzleHandlers) {
		return new GuzzleHttp\Client($args + [ 'handler' => $guzzleHandlers ]);
	};

	// Home page is just aJSON dump of stats for now
	$app->get('/', function (Request $request, Response $response, array $args) use($db) {
		$response = $response->withHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
		$response->getBody()->write(json_encode($db->getStats()));

		return $response;
	});

	// List all sites
	$app->get('/sites', function (Request $request, Response $response, array $args) use($db) {
		$response = $response->withHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
		$response->getBody()->write(json_encode($db->getSites()));

		return $response;
	});

	// Registration endpoint for v1 api
	$app->post('/register', function ($request, $response, $args) use ($db, $getGuzzle) {
		$url = $request->getBody()->getContents();
		$domain = parse_url($url, PHP_URL_HOST);
		$client = call_user_func($getGuzzle);

		// Basic validation that the site exists and get a little info
		$res = $client->request('GET', "http://$domain/statistics");
		if($res->getStatusCode() >= 400) {
			return $response->withStatus(400);
		}

		$json = $res->getBody()->getContents();

		$info = json_decode($json, 1);

		$db->register($domain, $info['name'], $info['created'], 1);
		return $response->withStatus(201);
	});

	// This is the old API that sites call to to report (an incomplete subset of) their stats
	$app->get('/report_scratchpad', function (Request $request, Response $response, array $args)  use($db, $getGuzzle) {
		$response = $response->withHeader('Cache-Control', 'no-cache, no-store, must-revalidate');

		$data = unserialize($request->getQueryParams()['data'] ?? '');

		// Ignore everything except the site URL
		$domain = $data['site_url'];

		$client = call_user_func($getGuzzle);

		$url = "http://$domain/login.json?hash=" . getenv('SECURITY_KEY', '');

		// Check site exists
		$res = $client->request('GET', $url);

		if($res->getStatusCode() >= 400) {
			return $response->withStatus(400);
		}

		// Get title etc from the site itself
		$json = $res->getBody()->getContents();
		$logins = json_decode($json, 1);

		$db->register($domain, $logins[0]['title'], $logins[0]['site_created'], 0);
		return $response->withStatus(201);
	});

	return $app;
}

// Run the router if this is file the entry point
if(realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) {
	createApp()->run();
}

// Return the function as a closure e.g. for the unit tester
return Closure::fromCallable('createApp');
