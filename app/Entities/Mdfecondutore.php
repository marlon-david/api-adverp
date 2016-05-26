<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mdfecondutore extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODMDFE', 'NOME', 'CPF'];

	protected $table = 'MDFECONDUTORES';

	protected $primaryKey = 'CODMDFECOND';

}
