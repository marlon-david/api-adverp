<?php

namespace App\Services;

use App\Repositories\MarcaRepository;
use App\Validators\MarcaValidator;

class MarcaService extends AbstractService {

	/**
	 * @var MarcaRepository
	 */
	protected $repository;

	/**
	 * @var MarcaValidator
	 */
	protected $validator;

	public function __construct(MarcaRepository $repository, MarcaValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}