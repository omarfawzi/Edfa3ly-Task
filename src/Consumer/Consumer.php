<?php

namespace Edfa3ly\Consumer;

use Edfa3ly\Consumer\Services\ConsumerService;
use Edfa3ly\Consumer\Strategies\DataSource;
use Edfa3ly\Services\Service;

class Consumer {

	/**
	 * @var DataSource
	 */
	public $dataSource ;

	/**
	 * @var ConsumerService
	 */
	public $service;

	public function __construct(Service $service)
	{
		$this->service = $service;
	}

	public function setDataSource(DataSource $dataSource)
	{
		$this->dataSource = $dataSource;
	}

	public function getProducts() : array
	{
		return $this->dataSource->getProducts();
	}

	public function consumeAndSaveProducts() : void
	{
		$this->service->saveProducts($this->getProducts());
	}

	/**
	 * @return DataSource
	 */
	public function getDataSource(): DataSource {
		return $this->dataSource;
	}
}