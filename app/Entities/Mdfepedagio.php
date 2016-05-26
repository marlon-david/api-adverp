<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mdfepedagio extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CNPJFORN', 'CNPJPG', 'NCOMPRA', 'CODMDFE'];

	protected $table = 'MDFEPEDAGIOS';

	protected $primaryKey = 'CODMDFEPEDAGIO';

}
