<?php

namespace App\Services;

use App\Entities\Cliente;
use App\Validators\OsValidator;
use App\Repositories\OsRepository;
use Prettus\Validator\Contracts\ValidatorInterface;

class OsService extends AbstractService
{
	/**
	 * @var OsRepository
	 */
	protected $repository;

	/**
	 * @var OsValidator
	 */
	protected $validator;

	public function __construct(OsRepository $repository, OsValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	/**
	 * @param array $data
	 *
	 * @return array|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|mixed|null|\Symfony\Component\HttpFoundation\Response|static|static[]
	 * @throws \Prettus\Validator\Exceptions\ValidatorException
	 */
	public function create(array $data)
	{
		try {
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

			if ($this->timestamps) {
				$data['DATACRIA'] = date( 'Y-m-d H:i:s' );
				$data['DATAALT']  = date( 'Y-m-d H:i:s' );
			}

			// Regras de negócio para vendas
			if (isset($data['CODCLI'])) {
				$cliente = Cliente::find($data['CODCLI']);

				if (empty($data['CODVND'])) {
					$data['CODVND'] = $cliente->CODVND;
				}

				if (empty($data['CODTRA'])) {
					$data['CODTRA'] = $cliente->CODTRA;
				}

				if (empty($data['CODFORMA'])) {
					$data['CODFORMA'] = $cliente->CODFORMA;
				}

				if (empty($data['CODTIPO'])) {
					$data['CODTIPO'] = $cliente->CODTIPOPAG;
				}
			}

			return $this->repository->create($data);
		} catch (ValidatorException $e) {
			return response([
				'error' => true,
				'message' => $e->getMessageBag()
			], 400);
		}
	}

}