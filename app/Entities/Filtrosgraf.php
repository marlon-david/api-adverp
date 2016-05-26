<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Filtrosgraf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFILTROSGRAF', 'CODGRAF', 'DIAFIN', 'ANOFIN', 'MESFIN', 'DIAINI', 'ANOINI', 'MESINI', 'TIPOLK', 'CODLOJA', 'ISOBRIGADO', 'LABEL', 'CAMPO', 'TABELA', 'CAMPOCHAVE', 'REPLKEY'];

	protected $table = 'FILTROSGRAF';

	protected $primaryKey = 'CODFILTROGRAF';

}
