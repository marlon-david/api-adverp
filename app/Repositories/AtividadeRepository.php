<?php

namespace App\Repositories;

use App\Entities\Atividade;

/**
 * Class AtividadeRepository
 * @package namespace App\Repositories;
 */
class AtividadeRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Atividade::class;

}
