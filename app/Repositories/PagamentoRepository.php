<?php

namespace App\Repositories;

use App\Entities\Pagamento;

/**
 * Class PagamentoRepository
 * @package namespace App\Repositories;
 */
class PagamentoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Pagamento::class;

}
