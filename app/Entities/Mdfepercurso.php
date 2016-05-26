<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mdfepercurso extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['SEQPERCURSO', 'CODUF'];

	protected $table = 'MDFEPERCURSO';

	protected $primaryKey = 'CODMDFE';

}
