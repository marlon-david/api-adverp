<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TipoProduto extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['TIPOPRODUTO', 'CODIGOSPED'];

	protected $table = 'TIPOPRODUTO';

	protected $primaryKey = 'CODTIPOPRODUTO';

}
