<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Grupoexpserv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXGRUPOEXP', 'CODCALC', 'DECISAO', 'CODREGRA', 'DESCRICAO'];

	protected $table = 'GRUPOEXPSERV';

}
