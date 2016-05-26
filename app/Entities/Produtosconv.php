<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produtosconv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODUTOSCONV', 'CODPRO', 'CODIGO', 'MARCA', 'CODPRODCONV'];

	protected $table = 'PRODUTOSCONV';

}
