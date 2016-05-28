<?php

namespace App\Repositories;

use App\Entities\Regiao;

/**
 * Class RegiaoRepository
 * @package namespace App\Repositories;
 */
class RegiaoRepository extends BaseRepository
{
	/**
	 * @var string
	 */
	protected $modelClass = Regiao::class;
}
