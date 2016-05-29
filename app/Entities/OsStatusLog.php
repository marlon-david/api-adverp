<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class OsStatusLog extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOSSTATUSLOG', 'CODOS', 'CODUSU', 'CODSTATUSNEW', 'CODSTATUSOLD', 'DATA', 'OBS'];

	protected $table = 'OSSTATUSLOG';

	protected $primaryKey = 'CODOSSTATUSLOG';

}
