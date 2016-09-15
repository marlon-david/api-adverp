<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class SubgrupoValidator extends AbstractValidator {

    protected $rules = [
		ValidatorInterface::RULE_CREATE => [
        	'CODGRU' => 'required|exists:firebird.GRUPOS,CODGRU'
        ],
		ValidatorInterface::RULE_UPDATE => []
   ];

}