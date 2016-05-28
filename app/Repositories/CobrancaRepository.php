<?php

namespace App\Repositories;

use App\Entities\Cobranca;

/**
 * Class CobrancaRepository
 * @package namespace App\Repositories;
 */
class CobrancaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Cobranca::class;

}
