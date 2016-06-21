<?php

namespace App\Entities;

class Portador extends FirebirdModel
{

	protected $fillable = ['AUXPORTADORES', 'CADINATIVO', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'PORTADOR', 'DATAALT'];

	protected $table = 'PORTADORES';

	protected $primaryKey = 'CODPORTADOR';

}
