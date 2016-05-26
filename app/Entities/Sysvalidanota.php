<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sysvalidanota extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSVALIDANOTA', 'TAMMAX', 'ID', 'DESCRICAO', 'CODCAMPO', 'ISOBRIGATORIO', 'CODSYS', 'AUXCODSYS', 'AUXTIPO', 'MSGRETORNO', 'OBJETO', 'TAG', 'TAMMIN', 'TIPO'];

	protected $table = 'SYSVALIDANOTA';

}
