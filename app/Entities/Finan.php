<?php

namespace App\Entities;

class Finan extends FirebirdModel
{

	protected $fillable = ['AUXFINAN', 'OBS', 'DTEMI', 'NFDATA', 'NF', 'CODOS', 'CODAUX', 'CODCLI', 'CODCON', 'CODCTR', 'CODFOR', 'CODLOJA', 'NUMLANC', 'CODFORMA', 'CODSUBCON', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'CANCELADO', 'OS'];

	protected $table = 'FINAN';

	protected $primaryKey = 'CODFIN';

}
