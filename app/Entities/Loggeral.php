<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Loggeral extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOGGERAL', 'AUX1', 'AUX2', 'AUX3', 'AUX4', 'AUX5', 'CHAVE', 'CODUSU', 'DATA', 'TELA', 'ACAO', 'OBS'];

	protected $table = 'LOGGERAL';

	protected $primaryKey = 'CODLOGGERAL';

}
