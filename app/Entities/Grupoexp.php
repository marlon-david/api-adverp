<?php

namespace App\Entities;

class Grupoexp extends FirebirdModel
{

	protected $fillable = ['AUXGRUPOEXP', 'CODCALC', 'DECISAO', 'CODREGRA', 'DESCRICAO'];

	protected $table = 'GRUPOEXP';

}
