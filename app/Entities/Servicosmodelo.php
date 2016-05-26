<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Servicosmodelo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSERVICOSMODELOS', 'QTDEPARAVND', 'CODMOD'];

	protected $table = 'SERVICOSMODELOS';

	protected $primaryKey = 'CODSER';

}
