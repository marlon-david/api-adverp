<?php

namespace App\Repositories;

use App\Entities\Tecnico;

/**
 * Class TecnicoRepository
 * @package namespace App\Repositories;
 */
class TecnicoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Tecnico::class;

}
