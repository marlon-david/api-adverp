<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Diasemana extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXDIASEMANA', 'DIAABREVIADO', 'DIASEMANA'];

	protected $table = 'DIASEMANA';

	protected $primaryKey = 'CODDIASEMANA';

}
