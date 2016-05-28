<?php

namespace App\Repositories;

use App\Entities\Inventario;

/**
 * Class InventarioRepository
 * @package namespace App\Repositories;
 */
class InventarioRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Inventario::class;

}
