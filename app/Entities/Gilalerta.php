<?php

namespace App\Entities;

class Gilalerta extends FirebirdModel
{

	protected $fillable = ['CODCOM', 'CODCHAVE', 'CAMPOVERIF1', 'CAMPOVERIF2', 'DETALHES', 'DATA', 'OBS', 'ISRESOLVIDO', 'ISIGNORADO'];

	protected $table = 'GILALERTAS';

	protected $primaryKey = 'CODALERTA';

}
