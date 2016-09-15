<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class OsItemProValidator extends AbstractValidator {

	protected $rules = [
		ValidatorInterface::RULE_CREATE => [
			'CODOS' => 'required|exists:firebird.OS,CODOS',
			'CODPRO' => 'required|exists:firebird.PRODUTOS,CODPRO',
			'UNITARIO' => 'required|numeric',
			'QTDE' => 'required|numeric',
			'CODLOJAI' => 'exists:firebird.LOJAS,CODLOJA',
			'CODLOJASAII' => 'exists:firebird.LOJAS,CODLOJA',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND'
		],
		ValidatorInterface::RULE_UPDATE => [
			'CODOS' => 'required|exists:firebird.OS,CODOS',
			'CODPRO' => 'required|exists:firebird.PRODUTOS,CODPRO',
			'UNITARIO' => 'numeric',
			'QTDE' => 'numeric',
			'CODLOJAI' => 'exists:firebird.LOJAS,CODLOJA',
			'CODLOJASAII' => 'exists:firebird.LOJAS,CODLOJA',
			'CODVND' => 'exists:firebird.VENDEDORES,CODVND'
		],
   ];

}