<?php

namespace App\Entities;

class OsStatusLog extends FirebirdModel
{

	protected $fillable = ['AUXOSSTATUSLOG', 'CODOS', 'CODUSU', 'CODSTATUSNEW', 'CODSTATUSOLD', 'DATA', 'OBS'];

	protected $table = 'OSSTATUSLOG';

	protected $primaryKey = 'CODOSSTATUSLOG';

}
