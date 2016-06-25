<?php

namespace App\Entities;

class Boletolognumero extends FirebirdModel
{

	protected $fillable = ['DATA', 'NUMDOCBOLETO', 'NOSSONUMERO', 'CODPAR', 'TIPO'];

	protected $table = 'BOLETOLOGNUMERO';

}
