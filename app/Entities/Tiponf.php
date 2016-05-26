<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tiponf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['TIPONF'];

	protected $table = 'TIPONF';

	protected $primaryKey = 'CODTIPONF';

}
