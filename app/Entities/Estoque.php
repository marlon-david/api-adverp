<?php

namespace App\Entities;

class Estoque extends FirebirdModel
{

	protected $fillable = ['AUXESTOQUE', 'CODPRO', 'CODLOJA', 'MEDIAVNDMESDTATU', 'QTDEMAX', 'MEDIAVNDMES', 'PONTOPEDIDO', 'INTDIASCOMPRA', 'LOTEECONOMICO', 'MEDDIASENTREGA', 'ESTOQPCTSEGURANCA', 'QTDEMIN', 'QTDEESTOQUE', 'CODESTAUXDBX', 'QTDEEXPEDICAO', 'QTDEFISICO'];

	protected $table = 'ESTOQUE';

	public $selectable = ['CODPRO', 'CODLOJA', 'QTDEESTOQUE'];

}
