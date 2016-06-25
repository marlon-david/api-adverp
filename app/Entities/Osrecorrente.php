<?php

namespace App\Entities;

class Osrecorrente extends FirebirdModel
{

	protected $fillable = ['DESCRICAO', 'CODTIPO', 'CODBAN', 'CODCLI', 'CODPARSTAT', 'CODTIPOSAI', 'DIA', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT', 'VALIDADE', 'DTINICIO', 'OBS', 'CODVND', 'COMISSAO', 'CODTRA', 'CADINATIVO', 'DATACANCEL', 'MOTIVOCANCEL', 'DTFIDELIDADE', 'ISSOBDEMANDA'];

	protected $table = 'OSRECORRENTE';

	protected $primaryKey = 'CODOSREC';

}
