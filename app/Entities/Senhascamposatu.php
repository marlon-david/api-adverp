<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Senhascamposatu extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSENHASCAMPOSATU', 'CODCAMPO', 'CODSENHASCAMPOSATU', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'SENHASCAMPOSATU';

}
