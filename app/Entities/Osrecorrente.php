<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Osrecorrente extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO', 'CODTIPO', 'CODBAN', 'CODCLI', 'CODPARSTAT', 'CODTIPOSAI', 'DIA', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT', 'VALIDADE', 'DTINICIO', 'OBS', 'CODVND', 'COMISSAO', 'CODTRA', 'CADINATIVO', 'DATACANCEL', 'MOTIVOCANCEL', 'DTFIDELIDADE', 'ISSOBDEMANDA'];

	protected $table = 'OSRECORRENTE';

	protected $primaryKey = 'CODOSREC';

}
