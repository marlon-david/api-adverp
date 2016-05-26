<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Paramworkflow extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPARAMWORKFLOW', 'VALOR', 'CODPARAM', 'CODWORK', 'TITULO', 'CHAVE'];

	protected $table = 'PARAMWORKFLOW';

}
