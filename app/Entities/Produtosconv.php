<?php

namespace App\Entities;

class Produtosconv extends FirebirdModel
{

	protected $fillable = ['AUXPRODUTOSCONV', 'CODPRO', 'CODIGO', 'MARCA', 'CODPRODCONV'];

	protected $table = 'PRODUTOSCONV';

}
