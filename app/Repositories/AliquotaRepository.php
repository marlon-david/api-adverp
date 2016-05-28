<?php

namespace App\Repositories;

use App\Entities\Aliquota;

/**
 * Class AliquotaRepository
 * @package namespace App\Repositories;
 */
class AliquotaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Aliquota::class;

}
