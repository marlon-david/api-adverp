<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PedidoStatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPEDIDOSTATUS', 'CODUSUCRIA', 'STATUS', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CADINATIVO'];

	protected $table = 'PEDIDOSTATUS';

	protected $primaryKey = 'CODPEDSTATUS';

}
