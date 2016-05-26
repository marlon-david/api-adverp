<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Finsubcontasrateio extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFINSUBCONTASRATEIO', 'CODFINSUBCON', 'CODSUBCON', 'PCTRATEIO', 'CODCTR'];

	protected $table = 'FINSUBCONTASRATEIO';

}
