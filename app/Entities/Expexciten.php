<?php

namespace App\Entities;

class Expexciten extends FirebirdModel
{

	protected $fillable = ['AUXEXPEXCITENS', 'CAIXA', 'CODOS', 'CODPRO', 'CODEXP', 'QTDE', 'NUMITEM', 'NUMITEMOS', 'ORDEM', 'UNITARIO'];

	protected $table = 'EXPEXCITENS';

}
