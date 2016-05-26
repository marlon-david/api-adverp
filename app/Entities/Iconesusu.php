<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Iconesusu extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXICONESUSU', 'CODUSU', 'CODUNICO', 'VERTICAL', 'CODICOINT', 'CODICOEXT', 'HORIZONTAL', 'ICONE', 'COMANDO', 'DESCRICAO'];

	protected $table = 'ICONESUSU';

}
