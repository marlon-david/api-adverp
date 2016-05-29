<?php

namespace App\Services;

use App\Validators\TransportadoraValidator;
use App\Repositories\TransportadoraRepository;

class TransportadoraService extends AbstractService
{
	/**
	 * @var TransportadoraRepository
	 */
	protected $repository;

	/**
	 * @var TransportadoraValidator
	 */
	protected $validator;

	public function __construct(TransportadoraRepository $repository, TransportadoraValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}