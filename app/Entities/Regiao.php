<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Regiao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXREGIOES', 'DATAALT', 'DATACRIA', 'SAB', 'REGIAO', 'SEG', 'SEX', 'TER', 'CODUSUALT', 'CODUSUCRIA', 'DOM', 'QUA', 'QUI'];

	protected $table = 'REGIOES';

	protected $primaryKey = 'CODREGIAO';

}
