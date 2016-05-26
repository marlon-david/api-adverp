<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Boletolognumero extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DATA', 'NUMDOCBOLETO', 'NOSSONUMERO', 'CODPAR', 'TIPO'];

	protected $table = 'BOLETOLOGNUMERO';

}
