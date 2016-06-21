<?php

namespace App\Entities;

class SenhasStatus extends FirebirdModel
{

	protected $fillable = ['AUXSENHASSTATUS', 'CODUSU', 'CODSTATUS', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'SENHASSTATUS';

	protected $primaryKey = 'CODSENHASSTATUS';

}
