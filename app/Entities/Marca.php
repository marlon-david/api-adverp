<?php

namespace App\Entities;

class Marca extends FirebirdModel
{

	protected $fillable = ['AUXMARCAS', 'CODUSUALT', 'CODUSUCRIA', 'SITE', 'DATAALT', 'DATACRIA', 'FOTONOME', 'MARCA', 'FOTOCAMINHO', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'MARCAS';

	protected $primaryKey = 'CODMAR';

}
