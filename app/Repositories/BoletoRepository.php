<?php

namespace App\Repositories;

use App\Entities\Boleto;

/**
 * Class BoletoRepository
 * @package namespace App\Repositories;
 */
class BoletoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Boleto::class;

}
