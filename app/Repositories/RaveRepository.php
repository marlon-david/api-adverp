<?php

namespace App\Repositories;

use App\Entities\Rave;

/**
 * Class RaveRepository
 * @package namespace App\Repositories;
 */
class RaveRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Rave::class;

}
