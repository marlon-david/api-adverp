<?php

namespace App\Repositories;

use App\Entities\Senha;

/**
 * Class SenhaRepository
 * @package namespace App\Repositories;
 */
class SenhaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Senha::class;

}
