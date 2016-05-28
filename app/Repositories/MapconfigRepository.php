<?php

namespace App\Repositories;

use App\Entities\Mapconfig;

/**
 * Class MapconfigRepository
 * @package namespace App\Repositories;
 */
class MapconfigRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Mapconfig::class;

}
