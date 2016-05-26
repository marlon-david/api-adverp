<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Parcelastipopagstatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPARCELASTIPOPAGSTATUS', 'PARTIPOSTATUS'];

	protected $table = 'PARCELASTIPOPAGSTATUS';

	protected $primaryKey = 'CODPARSTAT';

}
