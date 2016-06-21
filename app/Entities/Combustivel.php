<?php

namespace App\Entities;

class Combustivel extends FirebirdModel
{

	protected $fillable = ['AUXCOMBUSTIVEIS', 'COMBUSTIVEL'];

	protected $table = 'COMBUSTIVEIS';

	protected $primaryKey = 'CODCOMBUSTIVEL';

}
