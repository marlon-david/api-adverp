<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Inicializacoe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXINICIALIZACOES', 'CODUSU', 'DATA', 'HELPDESK'];

	protected $table = 'INICIALIZACOES';

}
