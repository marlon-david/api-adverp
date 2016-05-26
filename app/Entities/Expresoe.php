<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expresoe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPRESOES', 'NOME', 'ORDEM', 'CAMPO', 'OSITEN', 'CODCALC', 'FORMULA'];

	protected $table = 'EXPRESOES';

}
