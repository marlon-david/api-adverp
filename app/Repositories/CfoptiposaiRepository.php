<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Cfoptiposai;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CfoptiposaiRepository
 * @package namespace App\Repositories;
 */
class CfoptiposaiRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Cfoptiposai::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
