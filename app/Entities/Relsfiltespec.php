<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Relsfiltespec extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODREL', 'FILTRO'];

	protected $table = 'RELSFILTESPEC';

	protected $primaryKey = 'CODFILT';

}
