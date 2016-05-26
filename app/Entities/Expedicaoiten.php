<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expedicaoiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPEDICAOITENS', 'CODOS', 'CODPRO', 'NUMITEM', 'NUMITEMOS', 'ORDEM', 'QTDE', 'UNITARIO', 'CAIXA', 'VLRSUBST', 'ALIQIPI', 'VLRIPI', 'CST', 'CODCFOP', 'VLRICMS', 'BCALCICMS', 'BCALCSUBST', 'ALIQPIS', 'ALIQCOFINS', 'VLRPIS', 'VLRCOFINS', 'ALIQICMS', 'CODCST', 'IPI', 'CODCSOSN', 'BASEPIS', 'BASECOFINS', 'ALIQST', 'TOTPRODFRETE', 'VLRFRETE', 'BASEIPI', 'DESCSUFRAMA', 'DESCORGPUBLICO', 'ICMSDESONERACAO', 'CSTPIS', 'CSTCOFINS', 'UNITARIOSUBST', 'CODCALC', 'CSTIPI', 'UNITARIOIPI', 'VTOTTRIB', 'PREDBC', 'PREDBCST', 'VLRICMSDESON'];

	protected $table = 'EXPEDICAOITENS';

	protected $primaryKey = 'CODEXP';

}
