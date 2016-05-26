<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Finan extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFINAN', 'OBS', 'DTEMI', 'NFDATA', 'NF', 'CODOS', 'CODAUX', 'CODCLI', 'CODCON', 'CODCTR', 'CODFOR', 'CODLOJA', 'NUMLANC', 'CODFORMA', 'CODSUBCON', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'CANCELADO', 'OS'];

	protected $table = 'FINAN';

	protected $primaryKey = 'CODFIN';

}
