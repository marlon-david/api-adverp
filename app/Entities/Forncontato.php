<?php

namespace App\Entities;

class Forncontato extends FirebirdModel
{

	protected $fillable = ['AUXFORNCONTATOS', 'CODFOR', 'DTNASC', 'CODDEPART', 'NOME', 'FONE', 'EMAIL', 'OBS'];

	protected $table = 'FORNCONTATOS';

	protected $primaryKey = 'CODFORNCONTATOS';

}
