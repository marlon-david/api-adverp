<?php

namespace App\Repositories;

use App\Entities\Configo;

/**
 * Class ConfigoRepository
 * @package namespace App\Repositories;
 */
class ConfigoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Configo::class;

}
