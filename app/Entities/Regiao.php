<?php

namespace App\Entities;

class Regiao extends FirebirdModel
{

	protected $fillable = ['AUXREGIOES', 'DATAALT', 'DATACRIA', 'SAB', 'REGIAO', 'SEG', 'SEX', 'TER', 'CODUSUALT', 'CODUSUCRIA', 'DOM', 'QUA', 'QUI'];

	protected $table = 'REGIOES';

	protected $primaryKey = 'CODREGIAO';

}
