<?php

namespace App\Entities;

class Prosertotdia extends FirebirdModel
{

	protected $fillable = ['AUXPROSERTOTDIA', 'DIA', 'ANO', 'MES', 'CODGRU', 'CODMAR', 'PROSER', 'CODPROSER', 'DIASEMANA', 'CODSUBGRU', 'CODPROSERTOTDIA', 'CUSTO', 'FATBRUTO', 'DESCONTO', 'CODLOJAI', 'FATLIQUIDO', 'MBC'];

	protected $table = 'PROSERTOTDIA';

}
