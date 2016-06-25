<?php

namespace App\Entities;

class Boleto extends FirebirdModel
{

	protected $fillable = ['NOSSONUMERO', 'NOSSONUMEROSEMDIG', 'CODUSUCRIA', 'DATACRIA', 'DTBOLETOENVCNAB', 'NOMEARQENVIO', 'DTBOLETOIMPRESSO', 'CODTIPO', 'CODBAN', 'VALOR', 'CODCLI', 'DTVENCTO', 'CANCELADO', 'CANCELADOOBS', 'CODUSUCANC', 'DTCANCELADO'];

	protected $table = 'BOLETOS';

	protected $primaryKey = 'NUMDOCBOLETO';

}
