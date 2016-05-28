<?php

namespace App\Repositories;

use App\Entities\Pais;

/**
 * Class PaisRepository
 * @package namespace App\Repositories;
 */
class PaisRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Pais::class;

}
