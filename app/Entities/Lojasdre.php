<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lojasdre extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODLOJA', 'MES', 'ANO', 'FATURAMENTOBRUTO', 'IMPOSTOS', 'CMV', 'COMISSOES', 'OUTROSVARIAVEIS', 'DESPFIXAS', 'DESPFINANCEIRAS', 'DEPRECIACAO', 'GANHOSNAOOPERACIONAIS', 'PATENTES', 'CAPITAIS'];

	protected $table = 'LOJASDRE';

	protected $primaryKey = 'CODLOJASDRE';

}
