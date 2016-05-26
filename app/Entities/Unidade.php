<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Unidade extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['UN', 'DESCRICAO', 'CADINATIVO', 'AUXUNIDADES', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'UNIDADES';

	protected $primaryKey = 'CODUN';

}
