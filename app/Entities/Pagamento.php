<?php

namespace App\Entities;

class Pagamento extends FirebirdModel
{

	protected $fillable = ['AUXPAGAMENTOS', 'CODBAN', 'CODTIPO', 'BANCO', 'CANCELADO', 'CANCELADOOBS', 'VALOR', 'OBS', 'CC', 'CCDIG', 'AG', 'AGDIG', 'CHEQUEDIG', 'CODUSUALT', 'CODPARSTAT', 'CODUSUCRIA', 'CODUSUCANC', 'NOME', 'NOSSONUMERO', 'CPFCNPJ', 'DTEMI', 'DTPAGTO', 'DTVENCTO', 'DTCANCELADO', 'NUMDOC', 'NUMDOCBOLETO', 'PAGREC', 'CODPORTADOR', 'DTHORAEMIREL', 'DTHORACANCREL'];

	protected $table = 'PAGAMENTOS';

	protected $primaryKey = 'CODPAGAM';

}
