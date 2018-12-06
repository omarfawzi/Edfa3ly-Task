<?php

namespace Edfa3ly\Consumer\Controllers;

use Edfa3ly\Consumer\Consumer;
use Edfa3ly\Consumer\Factories\DataSourceFactory;
use Slim\Http\Request;
use Slim\Http\Response;

class ConsumerController {

	public $consumer;
	public $factory;

	public function __construct( Consumer $consumer, DataSourceFactory $factory ) {
		$this->consumer = $consumer;
		$this->factory  = $factory;
	}

	public function startConsuming( Request $request, Response $response, $args ) {
		$this->consumer->setDataSource( $this->factory->getDataSource( $args[0], $args[1] ) );
		$this->consumer->consumeAndSaveProducts();
	}

}