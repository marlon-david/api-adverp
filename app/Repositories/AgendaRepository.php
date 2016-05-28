<?php

namespace App\Repositories;

use App\Entities\Agenda;

/**
 * Class AgendaRepository
 * @package namespace App\Repositories;
 */
class AgendaRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Agenda::class;

}
