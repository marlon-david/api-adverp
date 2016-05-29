<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Estoque extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXESTOQUE', 'MEDIAVNDMESDTATU', 'QTDEMAX', 'MEDIAVNDMES', 'PONTOPEDIDO', 'INTDIASCOMPRA', 'LOTEECONOMICO', 'MEDDIASENTREGA', 'ESTOQPCTSEGURANCA', 'QTDEMIN', 'QTDEESTOQUE', 'CODESTAUXDBX', 'QTDEEXPEDICAO', 'QTDEFISICO'];

	protected $table = 'ESTOQUE';

}
