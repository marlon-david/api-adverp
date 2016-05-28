<?php

namespace App\Repositories;

use App\Entities\Conta;

/**
 * Class ContaRepository
 * @package namespace App\Repositories;
 */
class ContaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Conta::class;

}
