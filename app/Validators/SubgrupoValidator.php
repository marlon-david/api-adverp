<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class SubgrupoValidator extends LaravelValidator {

    protected $rules = [
		ValidatorInterface::RULE_CREATE => [
        	'CODGRU' => 'required|exists:firebird.GRUPOS,CODGRU'
        ],
		ValidatorInterface::RULE_UPDATE => []
   ];

}