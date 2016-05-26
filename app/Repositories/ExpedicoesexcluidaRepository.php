<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Expedicoesexcluida;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class ExpedicoesexcluidaRepository
 * @package namespace App\Repositories;
 */
class ExpedicoesexcluidaRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Expedicoesexcluida::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
