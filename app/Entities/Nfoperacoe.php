<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfoperacoe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO', 'NUMNFOPERACAO'];

	protected $table = 'NFOPERACOES';

	protected $primaryKey = 'CODNFOPERACAO';

}
