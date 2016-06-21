<?php

namespace App\Entities;

class Condutor extends FirebirdModel
{

	protected $fillable = ['NOME', 'CPF', 'CADINATIVO', 'AUXCONDUTORES', 'CODUSUALT', 'CODUSUCRIA', 'DATACRIA', 'DATAALT'];

	protected $table = 'CONDUTORES';

	protected $primaryKey = 'CODCONDUTOR';

}
