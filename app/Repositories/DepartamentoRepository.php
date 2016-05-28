<?php

namespace App\Repositories;

use App\Entities\Departamento;

/**
 * Class DepartamentoRepository
 * @package namespace App\Repositories;
 */
class DepartamentoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Departamento::class;

}
