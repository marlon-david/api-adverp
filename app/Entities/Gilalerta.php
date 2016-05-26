<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Gilalerta extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCOM', 'CODCHAVE', 'CAMPOVERIF1', 'CAMPOVERIF2', 'DETALHES', 'DATA', 'OBS', 'ISRESOLVIDO', 'ISIGNORADO'];

	protected $table = 'GILALERTAS';

	protected $primaryKey = 'CODALERTA';

}
