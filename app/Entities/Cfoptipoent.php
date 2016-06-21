<?php

namespace App\Entities;

class Cfoptipoent extends FirebirdModel
{

	protected $fillable = ['AUXCFOPTIPOENT', 'CODSITTRIB', 'CODTIPOENT', 'CODCFOPFORA', 'CODCFOPESTADO', 'CODCFOPTIPOENT', 'CODCSTESTADO', 'CODCSOSNESTADO', 'CODCSTIPI', 'CODCSTPIS', 'CODCSTCOFINS', 'ALIQPIS', 'ALIQCOFINS', 'CODLOJA'];

	protected $table = 'CFOPTIPOENT';

}
