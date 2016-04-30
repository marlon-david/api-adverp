<?php

namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class ProdutoValidator extends LaravelValidator
{

	protected $rules = [
		'nome' => 'required:max:255'
	];

}