<?php
require __DIR__ . '/../vendor/autoload.php';

describe('Storage', function(){
	beforeEach(function () {
		$this->storage = new \ScratchpadsStats\Storage;
		$this->storage->init(true);
	});

	it('Registers a site', function() {
		$created = time();
		$this->storage->register('test.example.com', 'Test Site', $created, 1);
		
		expect($this->storage->getNextSite())->toEqual([
			'url' => 'test.example.com',
			'api_version' => 1
		]);
	});

	it("Registers a failed attempt to access a site's stats", function() {
		$created = time();
		$this->storage->register('test.example.com', 'Test Site', $created, 1);
		$this->storage->register('test2.example.com', 'Test Site2', $created, 1);

		$this->storage->registerAttempt('test.example.com', false);
		
		expect($this->storage->getNextSite())->toEqual([
			'url' => 'test2.example.com',
			'api_version' => 1
		]);
	});

	it("Registers a successful attempt to access a site's stats", function() {
		$created = time();
		$this->storage->register('test.example.com', 'Test Site', $created, 1);
		$this->storage->register('test2.example.com', 'Test Site2', $created, 1);

		$this->storage->registerAttempt('test.example.com', true);
		
		expect($this->storage->getNextSite())->toEqual([
			'url' => 'test2.example.com',
			'api_version' => 1
		]);
	});
});