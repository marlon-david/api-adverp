<?php

namespace App\Entities;

class Aliquota extends FirebirdModel
{

	protected $fillable = ['AUXALIQUOTAS', 'CODALIQ', 'VALOR', 'TIPO'];

	protected $table = 'ALIQUOTAS';

}
