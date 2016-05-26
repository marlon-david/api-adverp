<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Portadore extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPORTADORES', 'CADINATIVO', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'PORTADOR', 'DATAALT'];

	protected $table = 'PORTADORES';

	protected $primaryKey = 'CODPORTADOR';

}
