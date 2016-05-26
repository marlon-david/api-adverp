<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Plflookup extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['TABFONTE', 'FCAMPO1', 'FCAMPO2'];

	protected $table = 'PLFLOOKUP';

}
