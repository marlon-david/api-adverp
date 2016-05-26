<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mdfedocsfiscai extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODNF'];

	protected $table = 'MDFEDOCSFISCAIS';

	protected $primaryKey = 'CODMDFE';

}
