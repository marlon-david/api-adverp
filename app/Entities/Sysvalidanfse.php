<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sysvalidanfse extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['TAMMAX', 'DESCRICAO', 'OBJETO', 'MSGRETORNO', 'ISOBRIGATORIO', 'AUXCODSYS', 'TAG', 'TIPO', 'AUXTIPO'];

	protected $table = 'SYSVALIDANFSE';

	protected $primaryKey = 'CODSYS';

}
