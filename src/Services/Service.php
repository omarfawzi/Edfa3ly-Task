<?php

namespace Edfa3ly\Services;

use Edfa3ly\Repositories\Repository;

class Service {

	public $repository;

	public function __construct(Repository $repository) {
		$this->repository = $repository;
	}
}