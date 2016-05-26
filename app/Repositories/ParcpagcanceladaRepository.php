<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Parcpagcancelada;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class ParcpagcanceladaRepository
 * @package namespace App\Repositories;
 */
class ParcpagcanceladaRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Parcpagcancelada::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
