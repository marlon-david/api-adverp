<?php

namespace App\Entities;

class UfProd extends FirebirdModel
{

	protected $fillable = ['AUXUFPROD', 'ALIQAUX', 'ALIQSUBST', 'FLAG', 'CODUF', 'CODPRO', 'UF', 'CODLOJA'];

	protected $table = 'UFPROD';

}
