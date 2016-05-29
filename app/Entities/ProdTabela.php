<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProdTabela extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODTABELAS', 'DESCRICAO'];

	protected $table = 'PRODTABELAS';

	protected $primaryKey = 'CODPRODTABELA';

}
