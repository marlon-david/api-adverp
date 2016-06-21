<?php

namespace App\Entities;

class Cstipi extends FirebirdModel
{

	protected $fillable = ['CST', 'DESCRICAO'];

	protected $table = 'CSTIPI';

	protected $primaryKey = 'CODCSTIPI';

}
