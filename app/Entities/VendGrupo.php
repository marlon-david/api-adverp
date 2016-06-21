<?php

namespace App\Entities;

class VendGrupo extends FirebirdModel
{

	protected $fillable = ['AUXVENDGRUPOS', 'CODGRU', 'NUMFAIXA', 'VALORINI', 'VALORFIN', 'COMISSAO'];

	protected $table = 'VENDGRUPOS';

	protected $primaryKey = 'CODVND';

}
