<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sqlcomando extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSQLCOMANDOS', 'CODSQLCOMANDO', 'SQL', 'DESCRICAO'];

	protected $table = 'SQLCOMANDOS';

}
