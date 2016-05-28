<?php

namespace App\Repositories;

use App\Entities\Veiculo;

/**
 * Class VeiculoRepository
 * @package namespace App\Repositories;
 */
class VeiculoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Veiculo::class;

}
