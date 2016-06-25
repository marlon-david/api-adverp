<?php

namespace App\Entities;

class ProdTabela extends FirebirdModel
{

	protected $fillable = ['AUXPRODTABELAS', 'DESCRICAO'];

	protected $table = 'PRODTABELAS';

	protected $primaryKey = 'CODPRODTABELA';

}
