<?php

namespace App\Entities;

class Systab extends FirebirdModel
{

	protected $fillable = ['AUXSYSTAB', 'COMANDO', 'DESCRICAO', 'VMAX', 'VERSAO', 'CODBANCO', 'ORDEMCRIA', 'VERSAOMAX', 'TABVIPROC', 'VERSAOCRIA', 'DATACRIA', 'TABELA', 'VMIN', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'REPLKEY'];

	protected $table = 'SYSTAB';

	protected $primaryKey = 'CODTAB';

}
