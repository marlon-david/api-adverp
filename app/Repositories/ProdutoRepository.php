<?php

namespace App\Repositories;

use App\Entities\Produto;

/**
 * Class ProdutoRepository
 * @package namespace App\Repositories;
 */
class ProdutoRepository extends BaseRepository
{
    protected $modelClass = Produto::class;
}
