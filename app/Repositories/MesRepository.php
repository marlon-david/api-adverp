<?php

namespace App\Repositories;

use App\Entities\Mes;

/**
 * Class MesRepository
 * @package namespace App\Repositories;
 */
class MesRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Mes::class;

}
