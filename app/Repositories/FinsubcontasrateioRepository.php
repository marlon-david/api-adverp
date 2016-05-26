<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Finsubcontasrateio;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FinsubcontasrateioRepository
 * @package namespace App\Repositories;
 */
class FinsubcontasrateioRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Finsubcontasrateio::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
