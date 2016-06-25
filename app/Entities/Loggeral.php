<?php

namespace App\Entities;

class Loggeral extends FirebirdModel
{

	protected $fillable = ['AUXLOGGERAL', 'AUX1', 'AUX2', 'AUX3', 'AUX4', 'AUX5', 'CHAVE', 'CODUSU', 'DATA', 'TELA', 'ACAO', 'OBS'];

	protected $table = 'LOGGERAL';

	protected $primaryKey = 'CODLOGGERAL';

}
