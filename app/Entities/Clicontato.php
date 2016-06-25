<?php

namespace App\Entities;

class Clicontato extends FirebirdModel
{

	protected $fillable = ['AUXCLICONTATOS', 'CODCLI', 'DTNASC', 'CODCARGO', 'CODDEPART', 'SEXO', 'NOME', 'FONE', 'EMAIL', 'OBS'];

	protected $table = 'CLICONTATOS';

	protected $primaryKey = 'CODCLICONTATOS';

}
