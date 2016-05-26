<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Clicontato extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCLICONTATOS', 'CODCLI', 'DTNASC', 'CODCARGO', 'CODDEPART', 'SEXO', 'NOME', 'FONE', 'EMAIL', 'OBS'];

	protected $table = 'CLICONTATOS';

	protected $primaryKey = 'CODCLICONTATOS';

}
