<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Condutore extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NOME', 'CPF', 'CADINATIVO', 'AUXCONDUTORES', 'CODUSUALT', 'CODUSUCRIA', 'DATACRIA', 'DATAALT'];

	protected $table = 'CONDUTORES';

	protected $primaryKey = 'CODCONDUTOR';

}
