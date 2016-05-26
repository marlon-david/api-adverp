<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Fechacx extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFECHACX', 'HORAINI', 'HORAFIN', 'DATA', 'ABERTURA', 'SUPRIMENTO', 'CODUSU', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'FECHACX';

	protected $primaryKey = 'CODFEC';

}
