<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expresoesserv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPRESOES', 'NOME', 'ORDEM', 'CAMPO', 'OSITEN', 'CODCALC', 'FORMULA'];

	protected $table = 'EXPRESOESSERV';

}
