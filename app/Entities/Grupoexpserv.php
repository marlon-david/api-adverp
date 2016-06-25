<?php

namespace App\Entities;

class Grupoexpserv extends FirebirdModel
{

	protected $fillable = ['AUXGRUPOEXP', 'CODCALC', 'DECISAO', 'CODREGRA', 'DESCRICAO'];

	protected $table = 'GRUPOEXPSERV';

}
