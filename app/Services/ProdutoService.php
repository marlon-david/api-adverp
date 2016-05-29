<?php

namespace App\Services;

use App\Validators\ProdutoValidator;
use App\Repositories\ProdutoRepository;

class ProdutoService extends AbstractService
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

}