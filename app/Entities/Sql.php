<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sql extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSQL', 'COMANDO', 'NOMESQL', 'DATAVIEW', 'OBS', 'CODREL', 'CODWHERE', 'ATIVO', 'ORDENADO', 'REPLKEY'];

	protected $table = 'SQL';

	protected $primaryKey = 'CODSQL';

}
