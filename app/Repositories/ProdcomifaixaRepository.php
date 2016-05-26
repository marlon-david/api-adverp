<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Prodcomifaixa;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class ProdcomifaixaRepository
 * @package namespace App\Repositories;
 */
class ProdcomifaixaRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Prodcomifaixa::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
