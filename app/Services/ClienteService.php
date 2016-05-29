<?php

namespace App\Services;

use App\Validators\ClienteValidator;
use App\Repositories\ClienteRepository;

class ClienteService extends AbstractService
{
	/**
	 * @var ClienteRepository
	 */
	protected $repository;

	/**
	 * @var ClienteValidator
	 */
	protected $validator;

	public function __construct(ClienteRepository $repository, ClienteValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function find($id)
	{
		try {
			return $this->repository->find($id)->getAttributes();
		} catch (Exception $e) {
			return response([
				'error' => true,
				'message' => $e->getMessage()
			], 400);
		}
	}

}