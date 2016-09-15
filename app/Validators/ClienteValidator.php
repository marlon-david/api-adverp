<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class ClienteValidator extends AbstractValidator
{

	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
			'CODTRA' => 'exists:firebird.TRANSPORTADORA,CODTRA',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND',
			'CODLOJA' => 'exists:firebird.LOJAS,CODLOJA',
			'CODFORMA' => 'exists:firebird.FORMAS,CODFORMA',
			'CODSEGMENTO' => 'exists:firebird.SEGMENTOS,CODSEGMENTO',
			'CODCLISTATUS' => 'exists:firebird.CLISTATUS,CODCLISTATUS',
			'CODPRODTABELA' => 'exists:firebird.PRODTABELAS,CODPRODTABELA',
			'CODREGIAO' => 'exists:firebird.REGIOES,CODREGIAO',
			'CODCIDNFE' => 'exists:firebird.CIDADESNFE,CODCID',
			'CODTIPOPAG' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
			'CODNFOPERACAO' => 'exists:firebird.CODNFOPERACAO,CODNFOPERACAO',
			'CODNFIEDEST' => 'exists:firebird.NFIEDESTINATARIOS,CODNFIEDEST',
			'RAZAO' => 'required',
			'EMAIL' => 'required|email',
			'UF' => 'size:2'
		],
		ValidatorInterface::RULE_UPDATE => [
			'CODTRA' => 'exists:firebird.TRANSPORTADORA,CODTRA',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND',
			'CODLOJA' => 'exists:firebird.LOJAS,CODLOJA',
			'CODFORMA' => 'exists:firebird.FORMAS,CODFORMA',
			'CODSEGMENTO' => 'exists:firebird.SEGMENTOS,CODSEGMENTO',
			'CODCLISTATUS' => 'exists:firebird.CLISTATUS,CODCLISTATUS',
			'CODPRODTABELA' => 'exists:firebird.PRODTABELAS,CODPRODTABELA',
			'CODREGIAO' => 'exists:firebird.REGIOES,CODREGIAO',
			'CODCIDNFE' => 'exists:firebird.CIDADESNFE,CODCID',
			'CODTIPOPAG' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
			'CODNFOPERACAO' => 'exists:firebird.CODNFOPERACAO,CODNFOPERACAO',
			'CODNFIEDEST' => 'exists:firebird.NFIEDESTINATARIOS,CODNFIEDEST',
			'EMAIL' => 'email',
			'UF' => 'size:2'
		],
		
	];

	protected $attributes = [
		'CODTRA' => 'Código de Transportadora',
		'CODVND' => 'Código do Vendedor',
		'CODLOJA' => 'Código de Loja',
		'CODFORMA' => 'Código de Forma de pagamento',
		'CODSEGMENTO' => 'Código de Segmento',
		'CODCLISTATUS' => 'Status do cliente',
		'CODPRODTABELA' => 'Código de Tabela de produto',
		'CODREGIAO' => 'Código da Região',
		'CODCIDNFE' => 'Código da Cidade',
		'CODTIPOPAG' => 'Código de Tipo de pagamento',
		'CODNFOPERACAO' => 'Código de Operação',
		'CODNFIEDEST' => 'Código de Inscrição Estadual',
		'RAZAO' => 'Nome/Razão social',
		'EMAIL' => 'E-mail',
		'UF' => 'UF',
	];

}