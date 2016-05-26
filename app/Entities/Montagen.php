<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Montagen extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTAGENS', 'CODLOJA', 'OBS', 'DATA', 'PREVISAO', 'NUMMON', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'MONTAGEMORICODMON', 'MONTAGEMORINUMITEM', 'MONTAGEMORINUMITEMMP', 'NUMAUXVENDA'];

	protected $table = 'MONTAGENS';

	protected $primaryKey = 'CODMON';

}
