<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Syslcsse extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSLCSSE', 'CODUSU', 'DATA', 'CODSE'];

	protected $table = 'SYSLCSSE';

	protected $primaryKey = 'MDL';

}
