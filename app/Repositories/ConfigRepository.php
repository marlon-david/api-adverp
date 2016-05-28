<?php

namespace App\Repositories;

use App\Entities\Config;

/**
 * Class ConfigRepository
 * @package namespace App\Repositories;
 */
class ConfigRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Config::class;

}
