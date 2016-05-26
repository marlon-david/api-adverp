<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Estoquelote extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXESTOQUELOTES', 'CODPRO', 'CODLOJA', 'CODFOR', 'CODLOTE', 'DATACRIA', 'VALIDADE', 'QTDEESTOQUE', 'FABRICACAO'];

	protected $table = 'ESTOQUELOTES';

	protected $primaryKey = 'CODESTLOTE';

}
