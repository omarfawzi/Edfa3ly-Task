<?php

namespace Edfa3ly\Consumer\Strategies;

use Edfa3ly\Consumer\Bridges\DataType;

abstract class DataSource {
	protected $data_type ;

	public function __construct(DataType $data_type) {
		$this->data_type = $data_type;
	}

	abstract function getProducts();
}