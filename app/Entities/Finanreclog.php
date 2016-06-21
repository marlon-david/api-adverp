<?php

namespace App\Entities;

class Finanreclog extends FirebirdModel
{

	protected $fillable = ['CODFIN', 'CODPAR', 'CODCON', 'CODSUBCON', 'CODFOR', 'CODTIPO', 'CODBAN', 'CODCTR', 'CODPARSTAT', 'DTVENCTO', 'VALOR', 'DATACRIA', 'CODUSUCRIA'];

	protected $table = 'FINANRECLOG';

	protected $primaryKey = 'CODFINREC';

}
