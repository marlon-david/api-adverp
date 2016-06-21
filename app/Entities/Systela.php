<?php

namespace App\Entities;

class Systela extends FirebirdModel
{

	protected $fillable = ['AUXSYSTELA', 'WIDTH', 'HEIGHT', 'DINAMICA', 'CODTIPOTELA', 'ISNOTUSADA', 'CLASSE', 'TITULO', 'REPLKEY', 'CADINATIVO'];

	protected $table = 'SYSTELA';

	protected $primaryKey = 'CODTELA';

}
