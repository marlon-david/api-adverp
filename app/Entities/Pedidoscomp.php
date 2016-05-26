<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pedidoscomp extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPEDIDOSCOMP', 'OBS', 'DATA', 'CODFOR', 'NUMPEDCOMP', 'CODTIPOENT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'PREVISAO', 'CODLOJA', 'CODUSUALT', 'LIBERADO', 'CONDPAG', 'SEGURO', 'TOTALNF', 'FRETEVLR', 'ICMSFRETE', 'TOTVLRICMS', 'OUTRASDESPESAS', 'TOTVLRICMSSUBS', 'CODENTCOT', 'CODPEDSTATUS', 'ISIPINOFRETE'];

	protected $table = 'PEDIDOSCOMP';

	protected $primaryKey = 'CODPEDCOMP';

}
