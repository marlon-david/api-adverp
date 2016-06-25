<?php

namespace App\Entities;

class Fechacx extends FirebirdModel
{

	protected $fillable = ['AUXFECHACX', 'HORAINI', 'HORAFIN', 'DATA', 'ABERTURA', 'SUPRIMENTO', 'CODUSU', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'FECHACX';

	protected $primaryKey = 'CODFEC';

}
