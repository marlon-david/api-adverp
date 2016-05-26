<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Syscomponente extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSCOMPONENTES', 'TOP', 'WIDTH', 'HEIGHT', 'CODTELA', 'CODCAMPO', 'TABORDER', 'COMPLEFT', 'CODTELALAY', 'CODTIPOCOMP', 'TIPOCOMPONENTE_CODTIPOCOMP', 'VISIBLE', 'NOME'];

	protected $table = 'SYSCOMPONENTES';

	protected $primaryKey = 'CODCOMP';

}
