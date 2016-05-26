<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cidadesnfe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCIDADESNFE', 'CODCID', 'CIDADE', 'CODUF', 'UF'];

	protected $table = 'CIDADESNFE';

}
