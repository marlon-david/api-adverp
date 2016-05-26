<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Osaberta extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOSABERTAS', 'CODOS', 'CODUSUEDITANDO'];

	protected $table = 'OSABERTAS';

}
