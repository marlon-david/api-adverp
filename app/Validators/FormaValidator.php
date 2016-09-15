<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;

class FormaValidator extends AbstractValidator {

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [],
        ValidatorInterface::RULE_UPDATE => [],
   ];

}