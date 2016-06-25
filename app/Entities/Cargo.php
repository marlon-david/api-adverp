<?php

namespace App\Entities;

class Cargo extends FirebirdModel
{

	protected $fillable = ['AUXCARGOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CARGO'];

	protected $table = 'CARGOS';

	protected $primaryKey = 'CODCARGO';

}
