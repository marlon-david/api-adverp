<?php

namespace App\Repositories;

use App\Entities\Cargo;

/**
 * Class CargoRepository
 * @package namespace App\Repositories;
 */
class CargoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Cargo::class;

}
