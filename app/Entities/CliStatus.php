<?php

namespace App\Entities;

class CliStatus extends FirebirdModel
{

	protected $fillable = ['AUXCLISTATUS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'COR', 'DESCRICAO'];

	protected $table = 'CLISTATUS';

	protected $primaryKey = 'CODCLISTATUS';

}
