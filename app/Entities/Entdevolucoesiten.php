<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entdevolucoesiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTDEVOLUCOESITENS', 'NUMITEM', 'CODENTDEV', 'OBS', 'CODOS', 'CODPRO', 'CODLOJAI', 'NUMITEMOS', 'NAOALTERAESTOQUE', 'PRDSRV', 'QTDE', 'UNITARIO', 'TOTALPRD', 'UNITSEMIPI', 'IPI', 'VLRSUBST', 'UNITSUBST'];

	protected $table = 'ENTDEVOLUCOESITENS';

	protected $primaryKey = 'ID';

}
