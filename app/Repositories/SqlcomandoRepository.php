<?php

namespace App\Repositories;

use App\Entities\Sqlcomando;

/**
 * Class SqlcomandoRepository
 * @package namespace App\Repositories;
 */
class SqlcomandoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Sqlcomando::class;

}
