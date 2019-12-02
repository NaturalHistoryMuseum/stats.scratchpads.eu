<?php
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

require __DIR__ . '/../vendor/autoload.php';

describe('Collection script', function(){
	it('Gets stats from a site and records that the site has been collected', function(){
		// Create a mock and queue and response.
		$stats = file_get_contents(__DIR__ . '/stats.json');
		$response = new Response(200, [], $stats);
		$mock = new MockHandler([
			$response
		]);
		$handler = HandlerStack::create($mock);
		$client = new Client([ 'handler' => $handler ]);

		$db = new \ScratchpadsStats\Storage;
		$db->init(true);
		$db->register('localhost:1234', 'Test Site', time(), 1);

		$collect = require __DIR__ . '/../bin/collect';

		call_user_func_array($collect, [$db, $client]);

		$parsed_stats = json_decode($stats, 1);

		expect($db->getStats())->toEqual([[
			'date' => time(),
			'since' => $parsed_stats['since'],
			'site' => 'localhost:1234',
			'stats' => $parsed_stats
		]]);

		//Todo: Need a db function to check the stats have been collected and that the
		// last_attempt, last_success fields have been updated.
	});
});