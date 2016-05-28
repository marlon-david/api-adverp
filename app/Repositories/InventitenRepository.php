<?php

namespace App\Repositories;

use App\Entities\Inventiten;

/**
 * Class InventitenRepository
 * @package namespace App\Repositories;
 */
class InventitenRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Inventiten::class;

}
