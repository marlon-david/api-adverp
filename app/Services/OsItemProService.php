<?php

namespace App\Services;

use App\Entities\Os;
use App\Validators\OsItemProValidator;
use App\Repositories\OsItemProRepository;

class OsItemProService extends AbstractService
{
	/**
	 * @var OsItemProRepository
	 */
	protected $repository;

	/**
	 * @var OsItemProValidator
	 */
	protected $validator;

	protected $timestamps = false;

	public function __construct(OsItemProRepository $repository, OsItemProValidator $validator)
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
			$this->validator->with($data)->passesOrFail();

			// Regras de negócio para itens da venda
			if (isset($data['CODOS'])) {
				$venda = Os::find($data['CODOS']);

				if (empty($data['CODVND'])) {
					$data['CODVND'] = $venda->CODVND;
				}

				if (empty($data['CODLOJAI'])) {
					$data['CODLOJAI'] = $venda->CODLOJAI;
				}

				if (empty($data['CODLOJASAII'])) {
					$data['CODLOJASAII'] = $venda->CODLOJASAII;
				}

				if (empty($data['TIPOI'])) {
					$data['TIPOI'] = $venda->TIPOI;
				}

				$count = $venda->itensPro()->count();
				$data['NUMITEM'] = $count + 1;
			}

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
			if (is_array($id)) {
				$newData = array_merge($data, $id);
			}

			$this->validator->with($newData)->passesOrFail();

			return $this->repository->update($data, $id);
		} catch (ValidatorException $e) {
			return response([
				'error' => true,
				'message' => $e->getMessageBag()
			], 400);
		}
	}

}