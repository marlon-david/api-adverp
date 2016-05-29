<?php

namespace App\Repositories;

use App\Entities\TransfItem;

/**
 * Class TransfItemRepository
 * @package namespace App\Repositories;
 */
class TransfItemRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = TransfItem::class;

}
