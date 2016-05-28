<?php

namespace App\Repositories;

use App\Entities\Estoque;

/**
 * Class EstoqueRepository
 * @package namespace App\Repositories;
 */
class EstoqueRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Estoque::class;

}
