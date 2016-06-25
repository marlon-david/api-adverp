<?php

namespace App\Entities;

class Chamadocomando extends FirebirdModel
{

	protected $fillable = ['CODCHAMADO', 'CODCLI', 'COMANDO', 'LABEL', 'ISIMPORTADO', 'DTEXECUCAO'];

	protected $table = 'CHAMADOCOMANDOS';

	protected $primaryKey = 'CODCHAMADOCOMANDO';

}
