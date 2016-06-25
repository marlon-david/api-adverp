<?php

namespace App\Entities;

class ProdTabFormula extends FirebirdModel
{

	protected $fillable = ['AUXPRODTABSFORMULAS', 'LITERALFORMULA', 'TIPOFORM', 'CODCAMPO', 'FORMULA'];

	protected $table = 'PRODTABSFORMULAS';

	protected $primaryKey = 'CODPRODFORMULAS';

}
