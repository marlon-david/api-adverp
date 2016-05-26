<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cfoptipoent extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCFOPTIPOENT', 'CODSITTRIB', 'CODTIPOENT', 'CODCFOPFORA', 'CODCFOPESTADO', 'CODCFOPTIPOENT', 'CODCSTESTADO', 'CODCSOSNESTADO', 'CODCSTIPI', 'CODCSTPIS', 'CODCSTCOFINS', 'ALIQPIS', 'ALIQCOFINS', 'CODLOJA'];

	protected $table = 'CFOPTIPOENT';

}
