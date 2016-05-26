<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Workflowhist extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODWORK', 'ENVIO'];

	protected $table = 'WORKFLOWHIST';

	protected $primaryKey = 'CODWORKLOG';

}
