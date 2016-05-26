<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Gilgrusenha extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODGILGRU', 'CODUSU'];

	protected $table = 'GILGRUSENHAS';

}
