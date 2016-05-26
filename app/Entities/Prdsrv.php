<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Prdsrv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRDSRV', 'COPIA', 'COD1', 'COD2', 'TIPO1', 'TIPO2'];

	protected $table = 'PRDSRV';

}
