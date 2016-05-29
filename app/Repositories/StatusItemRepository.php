<?php

namespace App\Repositories;

use App\Entities\StatusItem;

/**
 * Class StatusItemRepository
 * @package namespace App\Repositories;
 */
class StatusItemRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = StatusItem::class;

}
