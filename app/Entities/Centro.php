<?php

namespace App\Entities;

class Centro extends FirebirdModel
{

	protected $fillable = ['AUXCENTROS', 'CODUSU', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CENTRO', 'CADINATIVO'];

	protected $table = 'CENTROS';

	protected $primaryKey = 'CODCTR';

}
