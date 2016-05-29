<?php

namespace App\Services;

use App\Repositories\GrupoRepository;
use App\Validators\GrupoValidator;

class GrupoService extends AbstractService {

	/**
	 * @var GrupoRepository
	 */
	protected $repository;

	/**
	 * @var GrupoValidator
	 */
	protected $validator;

	public function __construct(GrupoRepository $repository, GrupoValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}