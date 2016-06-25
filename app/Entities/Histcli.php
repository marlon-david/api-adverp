<?php

namespace App\Entities;

class Histcli extends FirebirdModel
{

	protected $fillable = ['AUXHISTCLI', 'OBS', 'DATA', 'DTLIQ', 'CODCLI', 'CODUSUCRIA', 'CODTIPOCONTATO', 'CODCOBRANCA', 'OBSMENOR'];

	protected $table = 'HISTCLI';

	protected $primaryKey = 'CODHISTCLI';

}
