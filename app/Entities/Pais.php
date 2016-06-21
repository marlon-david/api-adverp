<?php

namespace App\Entities;

class Pais extends FirebirdModel
{

	protected $fillable = ['AUXPAISES', 'PAIS', 'CODBACEN'];

	protected $table = 'PAISES';

	protected $primaryKey = 'CODPAIS';

}
