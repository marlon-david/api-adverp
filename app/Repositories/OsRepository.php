<?php

namespace App\Repositories;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Os;

/**
 * Class OsRepository
 * @package namespace App\Repositories;
 */
class OsRepository extends BaseRepository
{
	protected $modelClass = Os::class;

	public function create(array $values)
	{
		$query = $this->newQuery();
		$connection = $query->getConnection();

		$gen = $connection->select("SELECT GEN_ID(GNCODLANC,1) AS CODOS, GEN_ID(GNOS,1) AS OS FROM RDB\$DATABASE");

		$values['CODOS'] = $gen[0]->CODOS;
		$values['OS'] = $gen[0]->OS;

		$query->insert($values);

		return $query->find($gen[0]->CODOS);
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
