<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ano extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXANOS', 'ANO', 'CODANO', 'ISBISEXTO'];

	protected $table = 'ANOS';

}
