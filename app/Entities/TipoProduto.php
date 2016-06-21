<?php

namespace App\Entities;

class TipoProduto extends FirebirdModel
{

	protected $fillable = ['TIPOPRODUTO', 'CODIGOSPED'];

	protected $table = 'TIPOPRODUTO';

	protected $primaryKey = 'CODTIPOPRODUTO';

}
