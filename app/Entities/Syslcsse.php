<?php

namespace App\Entities;

class Syslcsse extends FirebirdModel
{

	protected $fillable = ['AUXSYSLCSSE', 'CODUSU', 'DATA', 'CODSE'];

	protected $table = 'SYSLCSSE';

	protected $primaryKey = 'MDL';

}
