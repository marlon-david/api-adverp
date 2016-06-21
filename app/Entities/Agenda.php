<?php

namespace App\Entities;

class Agenda extends FirebirdModel
{

	protected $fillable = ['AUXAGENDA', 'HORA', 'DIA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CLIENTE', 'FONE', 'DESCRICAO'];

	protected $table = 'AGENDA';

	protected $primaryKey = 'CODAG';

}
