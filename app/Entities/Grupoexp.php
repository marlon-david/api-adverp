<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Grupoexp extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXGRUPOEXP', 'CODCALC', 'DECISAO', 'CODREGRA', 'DESCRICAO'];

	protected $table = 'GRUPOEXP';

}
