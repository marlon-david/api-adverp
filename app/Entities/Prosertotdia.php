<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Prosertotdia extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPROSERTOTDIA', 'DIA', 'ANO', 'MES', 'CODGRU', 'CODMAR', 'PROSER', 'CODPROSER', 'DIASEMANA', 'CODSUBGRU', 'CODPROSERTOTDIA', 'CUSTO', 'FATBRUTO', 'DESCONTO', 'CODLOJAI', 'FATLIQUIDO', 'MBC'];

	protected $table = 'PROSERTOTDIA';

}
