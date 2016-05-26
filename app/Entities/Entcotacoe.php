<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entcotacoe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTCOTACOES', 'OBS', 'DATA', 'PREVISAO', 'CODFOR', 'CODLOJA', 'NUMENTCOT', 'CODUSUALT', 'CODTIPOENT', 'CODUSUCRIA', 'ISMODELO', 'ISAPROVADO', 'DATAALT', 'DATACRIA', 'CONDPAG', 'SEGURO', 'TOTALNF', 'FRETEVLR', 'ICMSFRETE', 'TOTVLRICMS', 'OUTRASDESPESAS', 'TOTVLRICMSSUBS', 'PRAZORESPOSTA', 'CODENTCOTORI', 'ISRESPONDIDO', 'ISFINALIZADA'];

	protected $table = 'ENTCOTACOES';

	protected $primaryKey = 'CODENTCOT';

}
