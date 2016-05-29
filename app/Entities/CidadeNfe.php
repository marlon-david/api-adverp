<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CidadeNfe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCIDADESNFE', 'CODCID', 'CIDADE', 'CODUF', 'UF'];

	protected $table = 'CIDADESNFE';

}
