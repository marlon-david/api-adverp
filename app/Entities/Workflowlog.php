<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Workflowlog extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXWORKFLOWLOG', 'DATAUTILIZACAO', 'CODIGO', 'CODCLIADV', 'CODUSUUTILIZA'];

	protected $table = 'WORKFLOWLOG';

}
