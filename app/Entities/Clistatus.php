<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Clistatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCLISTATUS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'COR', 'DESCRICAO'];

	protected $table = 'CLISTATUS';

	protected $primaryKey = 'CODCLISTATUS';

}
