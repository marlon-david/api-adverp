<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Recbanc extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXRECBANC', 'CODBAN', 'CODTIPO', 'DATA', 'PAGREC', 'VALOR', 'DESCRICAO', 'NUMDOC'];

	protected $table = 'RECBANC';

	protected $primaryKey = 'CODRECBANC';

}
