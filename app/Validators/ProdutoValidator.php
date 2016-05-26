<?php

namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class ProdutoValidator extends LaravelValidator
{

	protected $rules = [
		'DESCRICAO' => 'required:max:160',
		'PRECOVENDA' => 'numeric'
	];

}