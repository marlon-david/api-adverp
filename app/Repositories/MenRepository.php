<?php

namespace App\Repositories;

use App\Entities\Men;

/**
 * Class MenRepository
 * @package namespace App\Repositories;
 */
class MenRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Men::class;

}
