<?php

namespace App\Entities;

class Relsfiltespec extends FirebirdModel
{

	protected $fillable = ['CODREL', 'FILTRO'];

	protected $table = 'RELSFILTESPEC';

	protected $primaryKey = 'CODFILT';

}
