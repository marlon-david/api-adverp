<?php

namespace App\Entities;

class Nfoperacoe extends FirebirdModel
{

	protected $fillable = ['DESCRICAO', 'NUMNFOPERACAO'];

	protected $table = 'NFOPERACOES';

	protected $primaryKey = 'CODNFOPERACAO';

}
