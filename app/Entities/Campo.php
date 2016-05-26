<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Campo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCAMPOS', 'CONDICOES', 'ORDEM', 'CODREL', 'SOAF', 'OCULTO', 'CARNUM', 'FILTRAIN', 'PODEORDEM', 'PODEFILTRO', 'ISPARSTPROC', 'OBRIGATORIO', 'ALIAS', 'LABEL', 'CAMPO', 'TABELA', 'TIPOFILTRO', 'REPLKEY', 'CAMPOEXTRALK'];

	protected $table = 'CAMPOS';

	protected $primaryKey = 'CODCAMPO';

}
