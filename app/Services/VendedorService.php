<?php

namespace App\Services;

use App\Validators\VendedorValidator;
use App\Repositories\VendedorRepository;

class VendedorService extends AbstractService
{
	/**
	 * @var VendedorRepository
	 */
	protected $repository;

	/**
	 * @var VendedorValidator
	 */
	protected $validator;

	public function __construct(VendedorRepository $repository, VendedorValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}