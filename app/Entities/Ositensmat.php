<?php

namespace App\Entities;

class Ositensmat extends FirebirdModel
{

	protected $fillable = ['AUXOSITENSMAT', 'NUMMAT', 'CODPRO', 'NUMITEM', 'CODOSORC', 'NUMMATORC', 'CODLOJASAIMATI', 'PRD_SRV', 'TIPOMATI', 'QTDE', 'CUSTO'];

	protected $table = 'OSITENSMAT';

	protected $primaryKey = 'CODOS';

}
