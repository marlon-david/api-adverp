<?php

namespace App\Entities;

class Mes extends FirebirdModel
{

	protected $fillable = ['AUXMESES', 'DESCABREVIADA', 'DESCRICAO'];

	protected $table = 'MESES';

	protected $primaryKey = 'CODMES';

}
