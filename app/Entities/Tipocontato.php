<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipocontato extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTIPOCONTATOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'TIPOCONTATO'];

	protected $table = 'TIPOCONTATOS';

	protected $primaryKey = 'CODTIPOCONTATO';

}
