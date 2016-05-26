<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Parcpagcancelada extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPARCPAGCANCELADAS', 'CODPAR', 'CODPAGAM'];

	protected $table = 'PARCPAGCANCELADAS';

}
