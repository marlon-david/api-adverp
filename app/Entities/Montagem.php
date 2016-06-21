<?php

namespace App\Entities;

class Montagem extends FirebirdModel
{

	protected $fillable = ['AUXMONTAGENS', 'CODLOJA', 'OBS', 'DATA', 'PREVISAO', 'NUMMON', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'MONTAGEMORICODMON', 'MONTAGEMORINUMITEM', 'MONTAGEMORINUMITEMMP', 'NUMAUXVENDA'];

	protected $table = 'MONTAGENS';

	protected $primaryKey = 'CODMON';

}
