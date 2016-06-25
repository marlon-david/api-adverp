<?php

namespace App\Entities;

class Relsmodulo extends FirebirdModel
{

	protected $fillable = ['AUXRELSMODULOS', 'MODULO', 'REPLKEY'];

	protected $table = 'RELSMODULOS';

	protected $primaryKey = 'CODMOD';

}
