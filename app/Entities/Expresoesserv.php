<?php

namespace App\Entities;

class Expresoesserv extends FirebirdModel
{

	protected $fillable = ['AUXEXPRESOES', 'NOME', 'ORDEM', 'CAMPO', 'OSITEN', 'CODCALC', 'FORMULA'];

	protected $table = 'EXPRESOESSERV';

}
