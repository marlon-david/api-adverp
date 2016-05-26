<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cargo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCARGOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CARGO'];

	protected $table = 'CARGOS';

	protected $primaryKey = 'CODCARGO';

}
