<?php

namespace App\Repositories;

use App\Entities\Combustivel;

/**
 * Class CombustivelRepository
 * @package namespace App\Repositories;
 */
class CombustivelRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Combustivel::class;

}
