<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Prodcomifaixa extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODCOMIFAIXAS', 'CODPRO', 'NUMFAIXA', 'PCTFIN', 'PCTINI', 'COMISSAO'];

	protected $table = 'PRODCOMIFAIXAS';

}
