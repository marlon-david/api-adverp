<?php

namespace App\Entities;

class Modelo extends FirebirdModel
{

	protected $fillable = ['AUXMODELOS', 'CODUSUALT', 'CODUSUCRIA', 'CODMONTADORA', 'DATAALT', 'DATACRIA', 'MODELO'];

	protected $table = 'MODELOS';

	protected $primaryKey = 'CODMOD';

}
