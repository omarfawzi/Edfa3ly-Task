<?php

namespace Edfa3ly\Consumer\Services;

use Edfa3ly\Services\Service;

class ConsumerService extends Service {

	public function saveProducts(array $products){
		// do some stuff before saving if necessary
		$this->repository->save($products);
	}
}