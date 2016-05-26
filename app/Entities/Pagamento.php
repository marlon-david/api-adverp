<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pagamento extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPAGAMENTOS', 'CODBAN', 'CODTIPO', 'BANCO', 'CANCELADO', 'CANCELADOOBS', 'VALOR', 'OBS', 'CC', 'CCDIG', 'AG', 'AGDIG', 'CHEQUEDIG', 'CODUSUALT', 'CODPARSTAT', 'CODUSUCRIA', 'CODUSUCANC', 'NOME', 'NOSSONUMERO', 'CPFCNPJ', 'DTEMI', 'DTPAGTO', 'DTVENCTO', 'DTCANCELADO', 'NUMDOC', 'NUMDOCBOLETO', 'PAGREC', 'CODPORTADOR', 'DTHORAEMIREL', 'DTHORACANCREL'];

	protected $table = 'PAGAMENTOS';

	protected $primaryKey = 'CODPAGAM';

}
