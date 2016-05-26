<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mapconfig extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMAPCONFIG', 'CODMAPCONFIG', 'HTMLINI', 'HTMLFIN'];

	protected $table = 'MAPCONFIG';

}
