<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cstipi extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CST', 'DESCRICAO'];

	protected $table = 'CSTIPI';

	protected $primaryKey = 'CODCSTIPI';

}
