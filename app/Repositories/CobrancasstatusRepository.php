<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Cobrancasstatus;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CobrancasstatusRepository
 * @package namespace App\Repositories;
 */
class CobrancasstatusRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Cobrancasstatus::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
