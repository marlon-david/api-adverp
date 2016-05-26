<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ClienteValidator extends LaravelValidator
{

	protected $rules = [
		'CODTRA' => 'exists:firebird.TRANSPORTADORA,CODTRA',
		'CODVND' => 'exists:firebird.VENDEDORES,CODVND',
		'CODLOJA' => 'exists:firebird.LOJAS,CODLOJA',
		'CODFORMA' => 'exists:firebird.FORMAS,CODFORMA',
		'CODSEGMENTO' => 'exists:firebird.SEGMENTOS,CODSEGMENTO',
		'CODCLISTATUS' => 'exists:firebird.CLISTATUS,CODCLISTATUS',
		'CODRODTABELA' => 'exists:firebird.RODTABELAS,CODRODTABELA',
		'CODREGIAO' => 'exists:firebird.REGIOES,CODREGIAO',
		'CODCIDNFE' => 'exists:firebird.CIDADESNFE,CODCID',
		'CODTIPOPAG' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
		'CODNFOPERACAO' => 'exists:firebird.CODNFOPERACAO,CODNFOPERACAO',
		'CODNFIEDEST' => 'exists:firebird.NFIEDESTINATARIOS,CODNFIEDEST',
		'CODTIPOPAG' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
		'EMAIL' => 'email',
		'UF' => 'size:2'
	];

}