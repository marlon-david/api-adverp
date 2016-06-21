<?php

namespace App\Entities;

class Iconesusu extends FirebirdModel
{

	protected $fillable = ['AUXICONESUSU', 'CODUSU', 'CODUNICO', 'VERTICAL', 'CODICOINT', 'CODICOEXT', 'HORIZONTAL', 'ICONE', 'COMANDO', 'DESCRICAO'];

	protected $table = 'ICONESUSU';

}
