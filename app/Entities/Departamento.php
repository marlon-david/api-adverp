<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Departamento extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXDEPARTAMENTOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DEPARTAMENTO', 'ENVIAEMAILCOBRANCA'];

	protected $table = 'DEPARTAMENTOS';

	protected $primaryKey = 'CODDEPART';

}
