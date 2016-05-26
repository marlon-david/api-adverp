<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Montagensstatussitem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTAGENSSTATUSITEM', 'STATUS'];

	protected $table = 'MONTAGENSSTATUSITEM';

	protected $primaryKey = 'CODMONISTATUS';

}
