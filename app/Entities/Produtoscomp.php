<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produtoscomp extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODUTOSCOMP', 'CODPROMAT', 'ORDEM', 'CODTEC', 'PROSER', 'PONTOS', 'CHAVE', 'QTDEAUX', 'QTDE'];

	protected $table = 'PRODUTOSCOMP';

	protected $primaryKey = 'CODPROACAB';

}
