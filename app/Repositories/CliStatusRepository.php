<?php

namespace App\Repositories;

use App\Entities\CliStatus;

/**
 * Class CliStatusRepository
 * @package namespace App\Repositories;
 */
class CliStatusRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = CliStatus::class;

}
