<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Syscampo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSCAMPOS', 'ORDEM', 'CODTAB', 'CODUSUALT', 'CODCHAVELK', 'CODLISTALK', 'CODUSUCRIA', 'ISNAOINTELA', 'ISOBRIGATORIO', 'DATAALT', 'DATACRIA', 'TIPO', 'LABEL', 'CAMPO', 'MASKARA', 'VDEFAULT', 'VALPADRAO', 'COMPUTEDBY', 'DESCRICAODET', 'ORDEMEXIBE', 'ISOCULTO', 'ISOBIGBANCO', 'ISCONSPADRAO', 'DESCRICAO', 'ISALTERADO', 'REPLKEY', 'HINT', 'ISESCONDER', 'TAMMAX'];

	protected $table = 'SYSCAMPOS';

	protected $primaryKey = 'CODCAMPO';

}
