<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pedidoscompiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPEDIDOSCOMPITENS', 'NUMITEM', 'OBS', 'CODPRO', 'CODLOJAI', 'CREDITAICMS', 'AJUSTAVALORES', 'GARI', 'VLRICMS', 'ALIQSUBST', 'PRECOTABELA', 'DESCPRECTAB', 'VLRICMSSUBST', 'RATFRTSEGDESPICMS', 'SEGURO', 'FRETEVLR', 'OUTRASDESPESAS', 'ICMS', 'UNITARIO', 'IPI', 'QTDE', 'QTDENAOENTR', 'UNITARIOSEMIPI', 'TOTALPRD', 'PRECOTABELACOMDESC', 'ALIQINTICMSLOJA'];

	protected $table = 'PEDIDOSCOMPITENS';

	protected $primaryKey = 'CODPEDCOMP';

}
