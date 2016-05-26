<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entdevstatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTDEVSTATUS', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'ENTDEVSTATUS';

	protected $primaryKey = 'CODENTDEVSTATUS';

}
