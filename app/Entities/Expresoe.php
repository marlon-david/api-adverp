<?php

namespace App\Entities;

class Expresoe extends FirebirdModel
{

	protected $fillable = ['AUXEXPRESOES', 'NOME', 'ORDEM', 'CAMPO', 'OSITEN', 'CODCALC', 'FORMULA'];

	protected $table = 'EXPRESOES';

}
