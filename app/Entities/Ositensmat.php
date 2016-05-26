<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ositensmat extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOSITENSMAT', 'NUMMAT', 'CODPRO', 'NUMITEM', 'CODOSORC', 'NUMMATORC', 'CODLOJASAIMATI', 'PRD_SRV', 'TIPOMATI', 'QTDE', 'CUSTO'];

	protected $table = 'OSITENSMAT';

	protected $primaryKey = 'CODOS';

}
