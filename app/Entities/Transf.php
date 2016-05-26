<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Transf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTRANSF', 'DATA', 'PREVISAO', 'CODLOJA', 'NUMRECEB', 'CODUSUALT', 'CODLOJAENT', 'CODLOJASAI', 'CODUSUCRIA', 'TIPO', 'ENTSAI', 'RECEBIDO', 'BAIXASOLENV', 'DATAALT', 'DATACRIA', 'OBS', 'NUMTRANSF', 'CONFERIDO'];

	protected $table = 'TRANSF';

	protected $primaryKey = 'CODTRANSF';

}
