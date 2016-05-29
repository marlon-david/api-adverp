<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class OsItemProValidator extends LaravelValidator {

    protected $rules = [
		'CODOS' => 'required|exists:firebird.OS,CODOS',
		'CODPRO' => 'required|exists:firebird.PRODUTOS,CODPRO',
   ];

}