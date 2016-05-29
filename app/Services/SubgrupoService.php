<?php

namespace App\Services;


use App\Repositories\SubgrupoRepository;
use App\Validators\SubgrupoValidator;

class SubgrupoService extends AbstractService {

	/**
	 * @var SubgrupoRepository
	 */
	protected $repository;

	/**
	 * @var SubgrupoValidator
	 */
	protected $validator;

	protected $timestamps = false;

	public function __construct(SubgrupoRepository $repository, SubgrupoValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}
}