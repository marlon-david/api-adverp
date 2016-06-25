<?php

namespace App\Entities;

class Contasgrupo extends FirebirdModel
{

	protected $fillable = ['AUXCONTASGRUPO', 'GRUPOCONTA', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'LIMITETOTAL'];

	protected $table = 'CONTASGRUPO';

	protected $primaryKey = 'CODGRUCON';

}
