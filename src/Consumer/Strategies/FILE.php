<?php

namespace Edfa3ly\Consumer\Strategies;

class File extends DataSource {
	public function getProducts() : array
	{
		// fetch data from file
		$data = 'data fetched from file';
		return $this->data_type->readAndConvert($data);
	}
}