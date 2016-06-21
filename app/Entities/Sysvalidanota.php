<?php

namespace App\Entities;

class Sysvalidanota extends FirebirdModel
{

	protected $fillable = ['AUXSYSVALIDANOTA', 'TAMMAX', 'ID', 'DESCRICAO', 'CODCAMPO', 'ISOBRIGATORIO', 'CODSYS', 'AUXCODSYS', 'AUXTIPO', 'MSGRETORNO', 'OBJETO', 'TAG', 'TAMMIN', 'TIPO'];

	protected $table = 'SYSVALIDANOTA';

}
