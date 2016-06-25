<?php

namespace App\Entities;

class Mdfedocsfiscai extends FirebirdModel
{

	protected $fillable = ['CODNF'];

	protected $table = 'MDFEDOCSFISCAIS';

	protected $primaryKey = 'CODMDFE';

}
