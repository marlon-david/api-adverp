<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfceiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODPRO', 'NUMITEM', 'CODIGO', 'DESCRICAO', 'CFOP', 'UN', 'QTDE', 'UNITARIO', 'DESCONTOPCT', 'TOTALITEM', 'VTOTTRIB', 'CST'];

	protected $table = 'NFCEITENS';

	protected $primaryKey = 'CODNFCE';

}
