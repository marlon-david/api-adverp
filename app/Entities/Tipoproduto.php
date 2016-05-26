<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipoproduto extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['TIPOPRODUTO', 'CODIGOSPED'];

	protected $table = 'TIPOPRODUTO';

	protected $primaryKey = 'CODTIPOPRODUTO';

}
