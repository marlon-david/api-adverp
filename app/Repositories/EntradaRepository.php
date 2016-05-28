<?php

namespace App\Repositories;

use App\Entities\Entrada;

/**
 * Class EntradaRepository
 * @package namespace App\Repositories;
 */
class EntradaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Entrada::class;

}
