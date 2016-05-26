<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Forncontato extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFORNCONTATOS', 'CODFOR', 'DTNASC', 'CODDEPART', 'NOME', 'FONE', 'EMAIL', 'OBS'];

	protected $table = 'FORNCONTATOS';

	protected $primaryKey = 'CODFORNCONTATOS';

}
