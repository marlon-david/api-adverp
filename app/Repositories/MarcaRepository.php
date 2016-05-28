<?php

namespace App\Repositories;

use App\Entities\Marca;

/**
 * Class MarcaRepository
 * @package namespace App\Repositories;
 */
class MarcaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Marca::class;

}
