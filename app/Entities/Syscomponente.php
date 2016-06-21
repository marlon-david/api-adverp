<?php

namespace App\Entities;

class Syscomponente extends FirebirdModel
{

	protected $fillable = ['AUXSYSCOMPONENTES', 'TOP', 'WIDTH', 'HEIGHT', 'CODTELA', 'CODCAMPO', 'TABORDER', 'COMPLEFT', 'CODTELALAY', 'CODTIPOCOMP', 'TIPOCOMPONENTE_CODTIPOCOMP', 'VISIBLE', 'NOME'];

	protected $table = 'SYSCOMPONENTES';

	protected $primaryKey = 'CODCOMP';

}
