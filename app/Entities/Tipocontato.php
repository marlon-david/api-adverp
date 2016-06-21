<?php

namespace App\Entities;

class Tipocontato extends FirebirdModel
{

	protected $fillable = ['AUXTIPOCONTATOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'TIPOCONTATO'];

	protected $table = 'TIPOCONTATOS';

	protected $primaryKey = 'CODTIPOCONTATO';

}
