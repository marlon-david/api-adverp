<?php

namespace App\Repositories;

use App\Entities\PedidoStatus;

/**
 * Class PedidoStatusRepository
 * @package namespace App\Repositories;
 */
class PedidoStatusRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = PedidoStatus::class;

}
