<?php

namespace App\Entities;

class Servcomifaixa extends FirebirdModel
{

	protected $fillable = ['AUXSERVCOMIFAIXAS', 'CODSER', 'NUMFAIXA', 'PCTFIN', 'PCTINI', 'COMISSAO', 'VLRFIN', 'VLRINI'];

	protected $table = 'SERVCOMIFAIXAS';

}
