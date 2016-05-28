<?php

namespace App\Repositories;

use App\Entities\Servico;

/**
 * Class ServicoRepository
 * @package namespace App\Repositories;
 */
class ServicoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Servico::class;

}
