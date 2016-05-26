<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Boleto extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NOSSONUMERO', 'NOSSONUMEROSEMDIG', 'CODUSUCRIA', 'DATACRIA', 'DTBOLETOENVCNAB', 'NOMEARQENVIO', 'DTBOLETOIMPRESSO', 'CODTIPO', 'CODBAN', 'VALOR', 'CODCLI', 'DTVENCTO', 'CANCELADO', 'CANCELADOOBS', 'CODUSUCANC', 'DTCANCELADO'];

	protected $table = 'BOLETOS';

	protected $primaryKey = 'NUMDOCBOLETO';

}
