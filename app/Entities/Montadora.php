<?php

namespace App\Entities;

class Montadora extends FirebirdModel
{

	protected $fillable = ['AUXMONTADORAS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'MONTADORA'];

	protected $table = 'MONTADORAS';

	protected $primaryKey = 'CODMONTADORA';

}
