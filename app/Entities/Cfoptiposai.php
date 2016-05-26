<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cfoptiposai extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCFOPTIPOSAI', 'CODCFOPTIPOSAI', 'CODTIPOSAI', 'CODCFOPESTADO', 'CODCFOPFORA', 'CODSITTRIB', 'CODCSTESTADO', 'CODCSTFORA', 'CODCSOSNESTADO', 'CODCSOSNFORA', 'CODCSTIPI', 'CODCSTPIS', 'CODCSTCOFINS', 'ALIQPIS', 'ALIQCOFINS', 'CODLOJA', 'PCTDIFERIMENTO'];

	protected $table = 'CFOPTIPOSAI';

}
