<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfregra extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNFREGRAS', 'SQLITENS', 'DESCRICAO', 'SQLMESTRE', 'SQLUPITENS', 'SQLUPMESTRE', 'CODREGRA'];

	protected $table = 'NFREGRAS';

}
