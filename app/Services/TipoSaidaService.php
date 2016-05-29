<?php

namespace App\Services;

use App\Validators\TipoSaidaValidator;
use App\Repositories\TipoSaidaRepository;

class TipoSaidaService extends AbstractService
{
	/**
	 * @var TipoSaidaRepository
	 */
	protected $repository;

	/**
	 * @var TipoSaidaValidator
	 */
	protected $validator;

	public function __construct(TipoSaidaRepository $repository, TipoSaidaValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

}