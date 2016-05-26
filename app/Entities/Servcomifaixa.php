<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Servcomifaixa extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSERVCOMIFAIXAS', 'CODSER', 'NUMFAIXA', 'PCTFIN', 'PCTINI', 'COMISSAO', 'VLRFIN', 'VLRINI'];

	protected $table = 'SERVCOMIFAIXAS';

}
