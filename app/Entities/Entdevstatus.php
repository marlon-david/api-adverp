<?php

namespace App\Entities;

class Entdevstatus extends FirebirdModel
{

	protected $fillable = ['AUXENTDEVSTATUS', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'ENTDEVSTATUS';

	protected $primaryKey = 'CODENTDEVSTATUS';

}
