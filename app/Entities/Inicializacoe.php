<?php

namespace App\Entities;

class Inicializacoe extends FirebirdModel
{

	protected $fillable = ['AUXINICIALIZACOES', 'CODUSU', 'DATA', 'HELPDESK'];

	protected $table = 'INICIALIZACOES';

}
