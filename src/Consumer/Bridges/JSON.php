<?php

namespace Edfa3ly\Consumer\Bridges;

class JSON implements DataType {
	public function readAndConvert($data)
	{
		// read JSON data and convert them to array of Product Model
		return 'this data is converted from JSON to array of products';
	}
}