<?php

namespace App\Repositories;

use App\Entities\Expedicao;

/**
 * Class ExpedicaoRepository
 * @package namespace App\Repositories;
 */
class ExpedicaoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Expedicao::class;

}
