<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class OsItemProValidator extends LaravelValidator {

    protected $rules = [
		'CODOS' => 'required|exists:firebird.OS,CODOS',
		'CODPRO' => 'required|exists:firebird.PRODUTOS,CODPRO',
	    'UNITARIO' => 'numeric',
		'QTDE' => 'required|numeric',
		'CODLOJAI' => 'exists:firebird.LOJAS,CODLOJA',
		'CODLOJASAII' => 'exists:firebird.LOJAS,CODLOJA',
		'CODVND' => 'exists:firebird.VENDEDORES,CODVND'
   ];

}