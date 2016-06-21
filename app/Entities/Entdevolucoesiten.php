<?php

namespace App\Entities;

class Entdevolucoesiten extends FirebirdModel
{

	protected $fillable = ['AUXENTDEVOLUCOESITENS', 'NUMITEM', 'CODENTDEV', 'OBS', 'CODOS', 'CODPRO', 'CODLOJAI', 'NUMITEMOS', 'NAOALTERAESTOQUE', 'PRDSRV', 'QTDE', 'UNITARIO', 'TOTALPRD', 'UNITSEMIPI', 'IPI', 'VLRSUBST', 'UNITSUBST'];

	protected $table = 'ENTDEVOLUCOESITENS';

	protected $primaryKey = 'ID';

}
