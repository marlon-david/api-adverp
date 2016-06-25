<?php

namespace App\Entities;

class Prodcst extends FirebirdModel
{

	protected $fillable = ['AUXPRODCST', 'CODCST', 'CST', 'CSTAUX'];

	protected $table = 'PRODCST';

}
