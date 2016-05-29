<?php

namespace App\Services;

use App\Validators\TipoPagValidator;
use App\Repositories\TipoPagRepository;

class TipoPagService extends AbstractService
{
	/**
	 * @var TipoPagRepository
	 */
	protected $repository;

	/**
	 * @var TipoPagValidator
	 */
	protected $validator;

	public function __construct(TipoPagRepository $repository, TipoPagValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}