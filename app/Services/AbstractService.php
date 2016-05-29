<?php

namespace App\Services;

use Prettus\Validator\Exceptions\ValidatorException;

abstract class AbstractService {

	protected $repository;

	protected $validator;

	/**
	 * @var bool
	 */
	protected $timestamps = true;

	public function create(array $data)
	{
		try {
			$this->validator->with($data)->passesOrFail();

			if ($this->timestamps) {
				$data['DATACRIA'] = date( 'Y-m-d H:i:s' );
				$data['DATAALT']  = date( 'Y-m-d H:i:s' );
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
			$this->validator->with($data)->passesOrFail();

			if ($this->timestamps) {
				$data['DATAALT'] = date( 'Y-m-d H:i:s' );
			}

			return $this->repository->update($data, $id);
		} catch (ValidatorException $e) {
			return response([
				'error' => true,
				'message' => $e->getMessageBag()
			], 400);
		}
	}
}