<?php

namespace App\Entities;

class Sysvalidanfse extends FirebirdModel
{

	protected $fillable = ['TAMMAX', 'DESCRICAO', 'OBJETO', 'MSGRETORNO', 'ISOBRIGATORIO', 'AUXCODSYS', 'TAG', 'TIPO', 'AUXTIPO'];

	protected $table = 'SYSVALIDANFSE';

	protected $primaryKey = 'CODSYS';

}
