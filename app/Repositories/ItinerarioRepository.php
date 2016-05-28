<?php

namespace App\Repositories;

use App\Entities\Itinerario;

/**
 * Class ItinerarioRepository
 * @package namespace App\Repositories;
 */
class ItinerarioRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Itinerario::class;

}
