<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Aliquota extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXALIQUOTAS', 'CODALIQ', 'VALOR', 'TIPO'];

	protected $table = 'ALIQUOTAS';

}
