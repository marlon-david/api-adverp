<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Inventario extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NUMCONF', 'DATA', 'OBS', 'QTDECONF', 'CODENT'];

	protected $table = 'INVENTARIOS';

	protected $primaryKey = 'CODCONF';

}
