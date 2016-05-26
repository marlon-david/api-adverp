<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Systab extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSTAB', 'COMANDO', 'DESCRICAO', 'VMAX', 'VERSAO', 'CODBANCO', 'ORDEMCRIA', 'VERSAOMAX', 'TABVIPROC', 'VERSAOCRIA', 'DATACRIA', 'TABELA', 'VMIN', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'REPLKEY'];

	protected $table = 'SYSTAB';

	protected $primaryKey = 'CODTAB';

}
