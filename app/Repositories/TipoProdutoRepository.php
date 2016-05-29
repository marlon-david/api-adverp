<?php

namespace App\Repositories;

use App\Entities\TipoProduto;

/**
 * Class TipoProdutoRepository
 * @package namespace App\Repositories;
 */
class TipoProdutoRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = TipoProduto::class;

}
