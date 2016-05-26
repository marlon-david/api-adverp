<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Syslc extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSLCS', 'NLCS'];

	protected $table = 'SYSLCS';

	protected $primaryKey = 'MDL';

}
