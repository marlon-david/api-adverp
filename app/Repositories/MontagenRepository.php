<?php

namespace App\Repositories;

use App\Entities\Montagen;

/**
 * Class MontagenRepository
 * @package namespace App\Repositories;
 */
class MontagenRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Montagen::class;

}
