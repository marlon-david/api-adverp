<?php

namespace App\Entities;

class Senhascamposatu extends FirebirdModel
{

	protected $fillable = ['AUXSENHASCAMPOSATU', 'CODCAMPO', 'CODSENHASCAMPOSATU', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'SENHASCAMPOSATU';

}
