<?php

namespace App\Entities;

class ProdOrigem extends FirebirdModel
{

	protected $fillable = ['DESCRICAO', 'CODAUXORIGEM', 'CODORIGEMNFE'];

	protected $table = 'PRODORIGENS';

	protected $primaryKey = 'CODPRODORIGEM';

}
