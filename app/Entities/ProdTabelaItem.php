<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ProdTabelaItem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODPRODTABELA', 'CODPRO', 'V1', 'V2', 'V3', 'V4', 'V5', 'V6', 'V7', 'V8', 'V9', 'V10', 'PRECO', 'PRECOMIN', 'V11', 'V13', 'V12', 'V14', 'V15', 'PRECOAUX'];

	protected $table = 'PRODTABELASITENS';

	protected $primaryKey = 'CODPRODTABELAITENS';

}
