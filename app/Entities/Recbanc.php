<?php

namespace App\Entities;

class Recbanc extends FirebirdModel
{

	protected $fillable = ['AUXRECBANC', 'CODBAN', 'CODTIPO', 'DATA', 'PAGREC', 'VALOR', 'DESCRICAO', 'NUMDOC'];

	protected $table = 'RECBANC';

	protected $primaryKey = 'CODRECBANC';

}
