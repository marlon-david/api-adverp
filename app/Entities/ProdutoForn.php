<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProdutoForn extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODUTOSFORN', 'CODFOR'];

	protected $table = 'PRODUTOSFORN';

	protected $primaryKey = 'CODPRO';

}
