<?php

namespace App\Entities;

class Sql extends FirebirdModel
{

	protected $fillable = ['AUXSQL', 'COMANDO', 'NOMESQL', 'DATAVIEW', 'OBS', 'CODREL', 'CODWHERE', 'ATIVO', 'ORDENADO', 'REPLKEY'];

	protected $table = 'SQL';

	protected $primaryKey = 'CODSQL';

}
