<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Mdfedocsfiscai;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class MdfedocsfiscaiRepository
 * @package namespace App\Repositories;
 */
class MdfedocsfiscaiRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Mdfedocsfiscai::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
