<?php

namespace App\Entities;

class Departamento extends FirebirdModel
{

	protected $fillable = ['AUXDEPARTAMENTOS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DEPARTAMENTO', 'ENVIAEMAILCOBRANCA'];

	protected $table = 'DEPARTAMENTOS';

	protected $primaryKey = 'CODDEPART';

}
