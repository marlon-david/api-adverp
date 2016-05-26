<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cfisc extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCFISC', 'CFISC', 'DESCRICAO'];

	protected $table = 'CFISC';

}
