<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Prodcst extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODCST', 'CODCST', 'CST', 'CSTAUX'];

	protected $table = 'PRODCST';

}
