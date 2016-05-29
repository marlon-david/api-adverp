<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UfProd extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXUFPROD', 'ALIQAUX', 'ALIQSUBST', 'FLAG', 'CODUF', 'CODPRO', 'UF', 'CODLOJA'];

	protected $table = 'UFPROD';

}
