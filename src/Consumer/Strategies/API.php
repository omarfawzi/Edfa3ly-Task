<?php

namespace Edfa3ly\Consumer\Strategies;

class API extends DataSource {

	public function getProducts() : array
	{
		// fetch data from api
		$data = 'data fetched from api';
		return $this->data_type->readAndConvert($data);
	}
}