<?php

namespace App\Repositories;

use App\Entities\Chamado;

/**
 * Class ChamadoRepository
 * @package namespace App\Repositories;
 */
class ChamadoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Chamado::class;

}
