<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Systela extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSTELA', 'WIDTH', 'HEIGHT', 'DINAMICA', 'CODTIPOTELA', 'ISNOTUSADA', 'CLASSE', 'TITULO', 'REPLKEY', 'CADINATIVO'];

	protected $table = 'SYSTELA';

	protected $primaryKey = 'CODTELA';

}
