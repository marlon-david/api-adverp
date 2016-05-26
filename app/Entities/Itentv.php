<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Itentv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXITENTV', 'CODITENTV', 'ITENTV', 'GRAF1', 'GRAF2', 'REPLKEY'];

	protected $table = 'ITENTV';

}
