<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ParcelaLog extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPARCELASLOG', 'DATA', 'DTVENCTO', 'CODBAN', 'CODFIN', 'NUMPAR', 'CODTIPO', 'DTPAGTO', 'VALOR', 'VALORPG', 'CODUSU', 'CODUSUALT', 'ALTEXC', 'FECHADA', 'BANCO', 'CANCELADO', 'DATAOCORRENCIA', 'PAGO', 'OBSCNAB', 'CC', 'CCDIG', 'AG', 'AGDIG', 'CHEQUEDIG', 'DIASATRASO', 'CLICONTRATO', 'ANTDTEMI', 'ANTCODUSU', 'ANTCODTIPO', 'CODCON', 'CODPAR', 'CODPAGAM', 'CODSUBCON', 'CODPARORI', 'CODENTDEV', 'CODPARSTAT', 'CODUSUCRIA', 'NOME', 'NOSSONUMERO', 'CPFCNPJ', 'DTEMI', 'DTCANCELADO', 'DTVENCTOORIGINAL', 'DTEMAILDADOSFATURAMENTO', 'DUPLLETRA', 'NUMDOC', 'NUMDOCBOLETO', 'OBS', 'PCTTAXA', 'PCTJUROS', 'PCTMULTA', 'MULTA', 'JUROS', 'TAXA', 'ADIC', 'DTBOLETOENVCNAB', 'DTBOLETOIMPRESSO'];

	protected $table = 'PARCELASLOG';

}
