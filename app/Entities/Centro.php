<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Centro extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCENTROS', 'CODUSU', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CENTRO', 'CADINATIVO'];

	protected $table = 'CENTROS';

	protected $primaryKey = 'CODCTR';

}
