<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Montagem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTAGENS', 'CODLOJA', 'OBS', 'DATA', 'PREVISAO', 'NUMMON', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'MONTAGEMORICODMON', 'MONTAGEMORINUMITEM', 'MONTAGEMORINUMITEMMP', 'NUMAUXVENDA'];

	protected $table = 'MONTAGENS';

	protected $primaryKey = 'CODMON';

}
