<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ncmuf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODNCM', 'UF', 'ALIQ_SUBST', 'CODLOJA', 'ALIQREDUCAO', 'ALIQICMSIMPORT', 'CODUFAUX'];

	protected $table = 'NCMUFS';

	protected $primaryKey = 'CODNCMUF';

}
