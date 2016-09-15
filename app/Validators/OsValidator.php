<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class OsValidator extends AbstractValidator {

	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
			'CODLOJA' => 'required|exists:firebird.LOJAS,CODLOJA',
			'CODLOJASAI' => 'exists:firebird.LOJAS,CODLOJA',
			'CODTIPOSAI' => 'exists:firebird.TIPOSAIDAS,CODTIPOSAI',
			'NPRECO' => 'exists:firebird.PRODTABELAS,CODPRODTABELA',
			'CODCLI' => 'required|exists:firebird.CLIENTES,CODCLI',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND',
			'CODVND2' => 'exists:firebird.VENDEDORES,CODVND',
			'CODSTATUS' => 'exists:firebird.STATUS,CODSTATUS',
			'CODTRA' => 'exists:firebird.TRANSPORTADORA,CODTRA',
			'CODFORMA' => 'exists:firebird.FORMAS,CODFORMA',
			'CODTIPO' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
			'CODCLICONTATOS' => 'exists:firebird.CLICONTATOS,CODCLICONTATOS',
		],
		ValidatorInterface::RULE_UPDATE => [
			'CODLOJA' => 'exists:firebird.LOJAS,CODLOJA',
			'CODLOJASAI' => 'exists:firebird.LOJAS,CODLOJA',
			'CODTIPOSAI' => 'exists:firebird.TIPOSAIDAS,CODTIPOSAI',
			'NPRECO' => 'exists:firebird.PRODTABELAS,CODPRODTABELA',
			'CODCLI' => 'exists:firebird.CLIENTES,CODCLI',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND',
			'CODVND2' => 'exists:firebird.VENDEDORES,CODVND',
			'CODSTATUS' => 'exists:firebird.STATUS,CODSTATUS',
			'CODTRA' => 'exists:firebird.TRANSPORTADORA,CODTRA',
			'CODFORMA' => 'exists:firebird.FORMAS,CODFORMA',
			'CODTIPO' => 'exists:firebird.TIPOSPAG,CODTIPOPAG',
			'CODCLICONTATOS' => 'exists:firebird.CLICONTATOS,CODCLICONTATOS',
		],
	];

}