<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ositenssertempo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOSITENSSERTEMPOS', 'NUMITEM', 'DATAINI', 'CODSER', 'CODTEC', 'TEMPOGASTO', 'DATAFIN', 'AUXCODTEMP'];

	protected $table = 'OSITENSSERTEMPOS';

	protected $primaryKey = 'CODOS';

}
