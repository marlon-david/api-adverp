<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Novo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNOVOS', 'FINAN', 'CUPOM', 'SAIDAS', 'TRANSF', 'ICONES', 'ENTRADAS', 'NUMDOCBOLETO', 'NUMCODBARRA', 'OS'];

	protected $table = 'NOVOS';

}
