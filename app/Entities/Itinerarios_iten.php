<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Itinerarios_iten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODITIN', 'CODOS', 'ORDEM'];

	protected $table = 'ITINERARIOS_ITENS';

	protected $primaryKey = 'CODITIN_ITEM';

}
