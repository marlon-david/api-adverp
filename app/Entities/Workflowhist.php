<?php

namespace App\Entities;

class Workflowhist extends FirebirdModel
{

	protected $fillable = ['CODWORK', 'ENVIO'];

	protected $table = 'WORKFLOWHIST';

	protected $primaryKey = 'CODWORKLOG';

}
