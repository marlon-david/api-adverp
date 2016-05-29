<?php

namespace App\Repositories;

use App\Entities\MontagemItem;

/**
 * Class MontagemItemRepository
 * @package namespace App\Repositories;
 */
class MontagemItemRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = MontagemItem::class;

}
