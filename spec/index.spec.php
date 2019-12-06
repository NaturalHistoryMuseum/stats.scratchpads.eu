<?php
require __DIR__ . '/../vendor/autoload.php';
$getRouter = require_once __DIR__ . '/../src/index.php';

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\ServerRequest;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

describe('Router', function() use($getRouter){
	beforeEach(function() use($getRouter) {
		$this->storage = new \ScratchpadsStats\Storage('sqlite3::memory:');
		$this->storage->migrate();

		$this->guzzleMocks = new MockHandler([]);
		$handler = HandlerStack::create($this->guzzleMocks);

		$this->router = call_user_func($getRouter, $this->storage, $handler);
	});

	it('Returns all stats on the index page', function(){
		$response = $this->router->handle(new ServerRequest('GET', 'http://localhost/'));
		$body = $response->getBody();
		$body->rewind();
		expect($body->getContents())->toBe('[]');
	});

	it('Registers a site on POST /register', function(){
		$info = [
			'name' => 'My Scratchpad',
			'created' => 12345
		];
		$this->guzzleMocks->append(new Response(200, [], json_encode($info)));
		$r = new ServerRequest('POST', 'http://localhost/register', [], 'http://localhost/');
		$response = $this->router->handle($r);

		expect($this->storage->getNextSite())->toEqual([
			'url' => 'localhost',
			'api_version' => 1
		]);
	});


	it('Registers an old site on POST /report_scratchpad', function(){
		$info = [
			[
				'title' => 'My Scratchpad',
				'site_created' => 12345
			]
		];
		$query = [
			'data' => serialize([
				'site_url' => 'http://localhost'
			])
		];
		$this->guzzleMocks->append(new Response(200, [], json_encode($info)));
		$r = new ServerRequest('GET', 'http://localhost/report_scratchpad');
		$response = $this->router->handle($r->withQueryParams($query));

		expect($this->storage->getNextSite())->toEqual([
			'url' => 'localhost',
			'api_version' => 0
		]);
	});
});