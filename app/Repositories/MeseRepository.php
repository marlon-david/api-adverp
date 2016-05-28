<?php

namespace App\Repositories;

use App\Entities\Mese;

/**
 * Class MeseRepository
 * @package namespace App\Repositories;
 */
class MeseRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Mese::class;

}
