<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entcotacoesiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTCOTACOESITENS', 'NUMITEM', 'OBS', 'CODPRO', 'CREDITAICMS', 'IPI', 'ICMS', 'QTDE', 'UNITARIO', 'PRECOCOMIMPOSTOS', 'GARI', 'VLRICMS', 'ALIQSUBST', 'PRECOTABELA', 'DESCPRECTAB', 'VLRICMSSUBST', 'RATFRTSEGDESPICMS', 'ISAPROVADO', 'SEGURO', 'FRETEVLR', 'OUTRASDESPESAS', 'UNITARIOSEMIPI', 'TOTALPRD', 'TOTALPRDCOMIMPOSTOS', 'PRECOTABELACOMDESC', 'ALIQINTICMSLOJA'];

	protected $table = 'ENTCOTACOESITENS';

	protected $primaryKey = 'CODENTCOT';

}
