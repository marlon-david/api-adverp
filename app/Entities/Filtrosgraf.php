<?php

namespace App\Entities;

class Filtrosgraf extends FirebirdModel
{

	protected $fillable = ['AUXFILTROSGRAF', 'CODGRAF', 'DIAFIN', 'ANOFIN', 'MESFIN', 'DIAINI', 'ANOINI', 'MESINI', 'TIPOLK', 'CODLOJA', 'ISOBRIGADO', 'LABEL', 'CAMPO', 'TABELA', 'CAMPOCHAVE', 'REPLKEY'];

	protected $table = 'FILTROSGRAF';

	protected $primaryKey = 'CODFILTROGRAF';

}
