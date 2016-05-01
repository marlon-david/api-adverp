<?php

namespace App\Services;

use App\Validators\ClienteValidator;
use App\Repositories\ClienteRepository;
use Prettus\Validator\Exceptions\ValidatorException;

class ClienteService
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

	public function create(array $data)
	{
		try {
			$this->validator->with($data)->passesOrFail();
			return $this->repository->create($data);
		} catch (ValidatorException $e) {
			return response([
				'error' => true,
				'message' => $e->getMessageBag()
			], 400);
		}
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

	public function update(array $data, $id)
	{
		try {
			$this->validator->with($data)->passesOrFail();
			return $this->repository->update($data, $id);
		} catch (ValidatorException $e) {
			return response([
				'error' => true,
				'message' => $e->getMessageBag()
			], 400);
		}
	}
}