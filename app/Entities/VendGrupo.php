<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class VendGrupo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXVENDGRUPOS', 'CODGRU', 'NUMFAIXA', 'VALORINI', 'VALORFIN', 'COMISSAO'];

	protected $table = 'VENDGRUPOS';

	protected $primaryKey = 'CODVND';

}
