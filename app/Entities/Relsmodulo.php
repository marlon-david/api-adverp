<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Relsmodulo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXRELSMODULOS', 'MODULO', 'REPLKEY'];

	protected $table = 'RELSMODULOS';

	protected $primaryKey = 'CODMOD';

}
