<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Agenda extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXAGENDA', 'HORA', 'DIA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CLIENTE', 'FONE', 'DESCRICAO'];

	protected $table = 'AGENDA';

	protected $primaryKey = 'CODAG';

}
