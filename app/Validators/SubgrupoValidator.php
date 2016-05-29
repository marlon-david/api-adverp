<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class SubgrupoValidator extends LaravelValidator {

    protected $rules = [
        'CODGRU' => 'required|exists:firebird.GRUPOS,CODGRU'
   ];

}