<?php

namespace App\Entities;

class Mdfepedagio extends FirebirdModel
{

	protected $fillable = ['CNPJFORN', 'CNPJPG', 'NCOMPRA', 'CODMDFE'];

	protected $table = 'MDFEPEDAGIOS';

	protected $primaryKey = 'CODMDFEPEDAGIO';

}
