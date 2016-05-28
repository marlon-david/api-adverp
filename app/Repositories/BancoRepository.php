<?php

namespace App\Repositories;

use App\Entities\Banco;

/**
 * Class BancoRepository
 * @package namespace App\Repositories;
 */
class BancoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Banco::class;

}
