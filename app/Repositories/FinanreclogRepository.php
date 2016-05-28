<?php

namespace App\Repositories;

use App\Entities\Finanreclog;

/**
 * Class FinanreclogRepository
 * @package namespace App\Repositories;
 */
class FinanreclogRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Finanreclog::class;

}
