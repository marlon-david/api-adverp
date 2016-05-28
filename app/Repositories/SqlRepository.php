<?php

namespace App\Repositories;

use App\Entities\Sql;

/**
 * Class SqlRepository
 * @package namespace App\Repositories;
 */
class SqlRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Sql::class;

}
