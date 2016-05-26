<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entradalote extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTRADALOTES', 'CODFOR', 'VALIDADE', 'CODLOJAI', 'CODPRO', 'QTDE', 'CODENT', 'NUMITEM', 'CODLOTE', 'FABRICACAO'];

	protected $table = 'ENTRADALOTES';

	protected $primaryKey = 'CODENTLOTE';

}
