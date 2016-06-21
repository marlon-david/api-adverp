<?php

namespace App\Entities;

class StatusItem extends FirebirdModel
{

	protected $fillable = ['AUXSTATUSITEM', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DESCRICAO'];

	protected $table = 'STATUSITEM';

	protected $primaryKey = 'CODSTATUSITEM';

}
