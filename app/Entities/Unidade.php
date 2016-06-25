<?php

namespace App\Entities;

class Unidade extends FirebirdModel
{

	protected $fillable = ['UN', 'DESCRICAO', 'CADINATIVO', 'AUXUNIDADES', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'UNIDADES';

	protected $primaryKey = 'CODUN';

}
