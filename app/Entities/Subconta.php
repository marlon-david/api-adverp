<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Subconta extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSUBCONTAS', 'CODSUBCON', 'SUBCONTA', 'TOTRATEIO', 'CADINATIVO', 'LIMITEINDIV', 'LIMITETOTAL', 'ISOBRIOBS'];

	protected $table = 'SUBCONTAS';

	protected $primaryKey = 'CODCON';

}
