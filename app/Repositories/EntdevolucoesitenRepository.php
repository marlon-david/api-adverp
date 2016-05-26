<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Entdevolucoesiten;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EntdevolucoesitenRepository
 * @package namespace App\Repositories;
 */
class EntdevolucoesitenRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Entdevolucoesiten::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
