<?php

namespace App\Entities;

class Transf extends FirebirdModel
{

	protected $fillable = ['AUXTRANSF', 'DATA', 'PREVISAO', 'CODLOJA', 'NUMRECEB', 'CODUSUALT', 'CODLOJAENT', 'CODLOJASAI', 'CODUSUCRIA', 'TIPO', 'ENTSAI', 'RECEBIDO', 'BAIXASOLENV', 'DATAALT', 'DATACRIA', 'OBS', 'NUMTRANSF', 'CONFERIDO'];

	protected $table = 'TRANSF';

	protected $primaryKey = 'CODTRANSF';

}
