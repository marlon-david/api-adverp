<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Modelo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMODELOS', 'CODUSUALT', 'CODUSUCRIA', 'CODMONTADORA', 'DATAALT', 'DATACRIA', 'MODELO'];

	protected $table = 'MODELOS';

	protected $primaryKey = 'CODMOD';

}
