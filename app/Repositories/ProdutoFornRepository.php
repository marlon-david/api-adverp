<?php

namespace App\Repositories;

use App\Entities\ProdutoForn;

/**
 * Class ProdutoFornRepository
 * @package namespace App\Repositories;
 */
class ProdutoFornRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = ProdutoForn::class;

}
