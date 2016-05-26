<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lognumeronota extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOGNUMERONOTA', 'CODUSUALT', 'DATAALT', 'NUMEROANTERIOR', 'NUMEROPOSTERIOR'];

	protected $table = 'LOGNUMERONOTA';

}
