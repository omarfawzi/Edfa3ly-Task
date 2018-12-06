<?php

use Psr\Container\ContainerInterface;

$container = $app->getContainer();

$container['consumerController'] = function (ContainerInterface $container) {
	return new \Edfa3ly\Consumer\Controllers\ConsumerController(
		$container->get('consumer'),
		$container->get('dataSourceFactory')
	);
};

$container['consumer'] = function (ContainerInterface $container) {
	return new \Edfa3ly\Consumer\Consumer(
		$container->get('consumerService')
	);
};

$container['dataSourceFactory'] = function () {
	return new \Edfa3ly\Consumer\Factories\DataSourceFactory();
};

$container['consumerService'] = function (ContainerInterface $container) {
	return new \Edfa3ly\Consumer\Services\ConsumerService(
		$container->get('consumerRepository')
	);
};

$container['consumerRepository'] = function () {
	return new \Edfa3ly\Consumer\Repositories\ConsumerRepository();
};