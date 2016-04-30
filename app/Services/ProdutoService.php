<?php

namespace App\Services;

use App\Validators\ProdutoValidator;
use App\Repositories\ProdutoRepository;
use Prettus\Validator\Exceptions\ValidatorException;

class ProdutoService
{
	/**
	 * @var ProdutoRepository
	 */
	protected $repository;

	/**
	 * @var ProdutoValidator
	 */
	protected $validator;

	public function __construct(ProdutoRepository $repository, ProdutoValidator $validator)
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