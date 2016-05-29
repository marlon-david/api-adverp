<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class StatusItem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSTATUSITEM', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DESCRICAO'];

	protected $table = 'STATUSITEM';

	protected $primaryKey = 'CODSTATUSITEM';

}
