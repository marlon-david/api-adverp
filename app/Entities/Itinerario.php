<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Itinerario extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NUMITIN', 'DATA', 'CODTRA', 'DATASAI', 'CEPINI', 'LOGINI', 'NUMINI', 'CEPFIM', 'LOGFIM', 'NUMFIM'];

	protected $table = 'ITINERARIOS';

	protected $primaryKey = 'CODITIN';

}
