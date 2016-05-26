<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lojasmetasdia extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOJASMETASDIA', 'CODMETA', 'DIA', 'DIASEMANA', 'META1', 'META2'];

	protected $table = 'LOJASMETASDIA';

	protected $primaryKey = 'CODMETADIA';

}
