<?php

namespace App\Validators;

use Illuminate\Validation\Factory;
use \Prettus\Validator\LaravelValidator;
use App\Services\Database\ChangeConnection;

class AbstractValidator extends LaravelValidator {

	public function __construct(Factory $validator)
	{
		parent::__construct($validator);
		ChangeConnection::apply('firebird');
	}

}