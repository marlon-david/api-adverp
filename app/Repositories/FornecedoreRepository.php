<?php

namespace App\Repositories;

use App\Entities\Fornecedore;

/**
 * Class FornecedoreRepository
 * @package namespace App\Repositories;
 */
class FornecedoreRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Fornecedore::class;

}
