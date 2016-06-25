<?php

namespace App\Entities;

class PedidoStatus extends FirebirdModel
{

	protected $fillable = ['AUXPEDIDOSTATUS', 'CODUSUCRIA', 'STATUS', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CADINATIVO'];

	protected $table = 'PEDIDOSTATUS';

	protected $primaryKey = 'CODPEDSTATUS';

}
