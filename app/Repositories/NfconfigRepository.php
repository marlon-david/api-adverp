<?php

namespace App\Repositories;

use App\Entities\Nfconfig;

/**
 * Class NfconfigRepository
 * @package namespace App\Repositories;
 */
class NfconfigRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Nfconfig::class;

}
