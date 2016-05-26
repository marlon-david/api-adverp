<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cstpiscofin extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CST', 'DESCRICAO'];

	protected $table = 'CSTPISCOFINS';

	protected $primaryKey = 'CODCSTPISCOFINS';

}
