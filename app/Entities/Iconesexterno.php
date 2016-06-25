<?php

namespace App\Entities;

class Iconesexterno extends FirebirdModel
{

	protected $fillable = ['AUXICONESEXTERNOS', 'ICONE', 'COMANDO', 'DESCRICAO'];

	protected $table = 'ICONESEXTERNOS';

	protected $primaryKey = 'CODICOEXT';

}
