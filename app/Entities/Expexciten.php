<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expexciten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPEXCITENS', 'CAIXA', 'CODOS', 'CODPRO', 'CODEXP', 'QTDE', 'NUMITEM', 'NUMITEMOS', 'ORDEM', 'UNITARIO'];

	protected $table = 'EXPEXCITENS';

}
