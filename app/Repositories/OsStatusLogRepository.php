<?php

namespace App\Repositories;

use App\Entities\OsStatusLog;

/**
 * Class OsStatusLogRepository
 * @package namespace App\Repositories;
 */
class OsStatusLogRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = OsStatusLog::class;

}
