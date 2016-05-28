<?php

namespace App\Repositories;

use App\Entities\Loja;

/**
 * Class LojaRepository
 * @package namespace App\Repositories;
 */
class LojaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Loja::class;

}
