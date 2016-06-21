<?php

namespace App\Entities;

class ProdutoForn extends FirebirdModel
{

	protected $fillable = ['AUXPRODUTOSFORN', 'CODFOR'];

	protected $table = 'PRODUTOSFORN';

	protected $primaryKey = 'CODPRO';

}
