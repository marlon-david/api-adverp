<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProdOrigem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO', 'CODAUXORIGEM', 'CODORIGEMNFE'];

	protected $table = 'PRODORIGENS';

	protected $primaryKey = 'CODPRODORIGEM';

}
