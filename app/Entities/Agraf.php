<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Agraf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXAGRAF', 'CODGRAFO', 'CODGRAFDEST', 'DESCRIGRAFO', 'DESCRIGRAFDEST', 'REPLKEY'];

	protected $table = 'AGRAF';

}
