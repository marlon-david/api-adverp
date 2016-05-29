<?php

namespace App\Services;

use App\Validators\OsItemProValidator;
use App\Repositories\OsItemProRepository;

class OsItemProService extends AbstractService
{
	/**
	 * @var OsItemProRepository
	 */
	protected $repository;

	/**
	 * @var OsItemProValidator
	 */
	protected $validator;

	protected $timestamps = false;

	public function __construct(OsItemProRepository $repository, OsItemProValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}