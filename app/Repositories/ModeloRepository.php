<?php

namespace App\Repositories;

use App\Entities\Modelo;

/**
 * Class ModeloRepository
 * @package namespace App\Repositories;
 */
class ModeloRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Modelo::class;

}
