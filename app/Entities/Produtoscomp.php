<?php

namespace App\Entities;

class Produtoscomp extends FirebirdModel
{

	protected $fillable = ['AUXPRODUTOSCOMP', 'CODPROMAT', 'ORDEM', 'CODTEC', 'PROSER', 'PONTOS', 'CHAVE', 'QTDEAUX', 'QTDE'];

	protected $table = 'PRODUTOSCOMP';

	protected $primaryKey = 'CODPROACAB';

}
