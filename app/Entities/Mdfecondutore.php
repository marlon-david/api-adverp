<?php

namespace App\Entities;

class Mdfecondutore extends FirebirdModel
{

	protected $fillable = ['CODMDFE', 'NOME', 'CPF'];

	protected $table = 'MDFECONDUTORES';

	protected $primaryKey = 'CODMDFECOND';

}
