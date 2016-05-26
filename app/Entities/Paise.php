<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Paise extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPAISES', 'PAIS', 'CODBACEN'];

	protected $table = 'PAISES';

	protected $primaryKey = 'CODPAIS';

}
