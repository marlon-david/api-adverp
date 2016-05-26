<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Iconesexterno extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXICONESEXTERNOS', 'ICONE', 'COMANDO', 'DESCRICAO'];

	protected $table = 'ICONESEXTERNOS';

	protected $primaryKey = 'CODICOEXT';

}
