<?php

namespace App\Repositories;

use App\Entities\Produto;
use App\Validators\ProdutoRepositoryValidator;

/**
 * Class ProdutoRepository
 * @package namespace App\Repositories;
 */
class ProdutoRepository extends BaseRepository
{
    protected $modelClass = Produto::class;
}
