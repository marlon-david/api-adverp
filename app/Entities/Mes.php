<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mes extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMESES', 'DESCABREVIADA', 'DESCRICAO'];

	protected $table = 'MESES';

	protected $primaryKey = 'CODMES';

}
