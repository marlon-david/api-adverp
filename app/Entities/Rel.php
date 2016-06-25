<?php

namespace App\Entities;

class Rel extends FirebirdModel
{

	protected $fillable = ['AUXRELS', 'DESCRICAO', 'DATAALT', 'DATACRIA', 'CODCLI', 'CODMOD', 'VERSAO', 'CODTVR', 'CODRAVE', 'CODIGONUM', 'CODSUBTVR', 'VMINIMAEXE', 'SOAF', 'ISBI', 'ISCRM', 'ATIVO', 'DELCLI', 'CODLOJA', 'NCHAMADO', 'TIPOTELA', 'PROCDIFERE', 'DISPONIVEL', 'OUTROCHAMADO', 'CODIGO', 'TITULO', 'NOMEDLL', 'VMAXEXE', 'FILTRAMESANO', 'CODRELEASEMIM', 'CODRELEASEMAX', 'REPLKEY', 'CODTIPOREL'];

	protected $table = 'RELS';

	protected $primaryKey = 'CODREL';

}
