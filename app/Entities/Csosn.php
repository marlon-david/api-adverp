<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Csosn extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CSOSN', 'CSOSNAUX'];

	protected $table = 'CSOSN';

	protected $primaryKey = 'CODCSOSN';

}
