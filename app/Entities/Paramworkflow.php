<?php

namespace App\Entities;

class Paramworkflow extends FirebirdModel
{

	protected $fillable = ['AUXPARAMWORKFLOW', 'VALOR', 'CODPARAM', 'CODWORK', 'TITULO', 'CHAVE'];

	protected $table = 'PARAMWORKFLOW';

}
