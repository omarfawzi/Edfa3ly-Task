<?php

namespace Edfa3ly\Consumer\Factories;
use Edfa3ly\Consumer\Bridges\JSON;
use Edfa3ly\Consumer\Bridges\XML;
use Edfa3ly\Consumer\Strategies\API;
use Edfa3ly\Consumer\Strategies\DataSource;
use Edfa3ly\Consumer\Strategies\File;

class DataSourceFactory {

	public function getDataSource(string $dataSourceType , string $dataType) : DataSource
	{
		$dataSource = null;
		switch ($dataSourceType){
			case 'API' && $dataType == 'JSON':
				$dataSource = new API(new JSON());
				break;
			case 'FILE' && $dataType == 'JSON':
				$dataSource = new File(new JSON());
				break;
			case 'API' && $dataType == 'XML':
				$dataSource = new API(new XML());
				break;
			case 'FILE' && $dataType == 'XML':
				$dataSource = new File(new XML());
				break;
			default:
				break;
		}
		return $dataSource;
	}
}