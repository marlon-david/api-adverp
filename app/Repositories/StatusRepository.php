<?php

namespace App\Repositories;

use App\Entities\Status;

/**
 * Class StatusRepository
 * @package namespace App\Repositories;
 */
class StatusRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Status::class;

}
