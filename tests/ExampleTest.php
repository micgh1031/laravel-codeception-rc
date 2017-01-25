<?php

class ExampleTest extends TestCase {

	/* This property needs to be added explicitly in Laravel 5.1+ */
	protected $baseUrl = '';

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testBasicString()
	{
		$name = 'Laravel 5';

		$this->assertEquals('Laravel 5', $name );
	}

}
