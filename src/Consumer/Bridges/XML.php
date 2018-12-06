<?php

namespace Edfa3ly\Consumer\Bridges;


class XML implements DataType {
	public function readAndConvert($data)
	{
		// read XML Data and convert them to array of Product Model
		return 'this data is converted from XML to array of products';
	}
}