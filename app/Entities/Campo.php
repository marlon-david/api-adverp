<?php

namespace App\Entities;

class Campo extends FirebirdModel
{

	protected $fillable = ['AUXCAMPOS', 'CONDICOES', 'ORDEM', 'CODREL', 'SOAF', 'OCULTO', 'CARNUM', 'FILTRAIN', 'PODEORDEM', 'PODEFILTRO', 'ISPARSTPROC', 'OBRIGATORIO', 'ALIAS', 'LABEL', 'CAMPO', 'TABELA', 'TIPOFILTRO', 'REPLKEY', 'CAMPOEXTRALK'];

	protected $table = 'CAMPOS';

	protected $primaryKey = 'CODCAMPO';

}
