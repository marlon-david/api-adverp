<?php

namespace App\Entities;

class Csosn extends FirebirdModel
{

	protected $fillable = ['CSOSN', 'CSOSNAUX'];

	protected $table = 'CSOSN';

	protected $primaryKey = 'CODCSOSN';

}
