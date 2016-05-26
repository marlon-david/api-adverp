<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expedicao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPEDICAO', 'OBS', 'DATA', 'DTENTREGA', 'PREVENTREGA', 'CODCLI', 'NUMEXP', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CODLOJA', 'PESOLIQUIDO', 'PESOBRUTO', 'VOLUME', 'SEPARADOR', 'EMBALADOR', 'CONFERENTE', 'ISULTIMA', 'TOTNF', 'CALCDIM', 'TOTVLRICMS', 'TOTVLRSUBST', 'TOTBCALCICMS', 'TOTBCALCSUBST', 'TOTICMSSUBST', 'TOTPRODNF', 'ALIQPIS', 'ALIQCOFINS', 'VLRPIS', 'VLRCOFINS', 'TOTFRETE', 'TOTALIPI', 'TOTAL', 'DESCSUFRAMA', 'ISSUFRAMA', 'DESCORGPUBLICO', 'IGNORACALCDIM', 'VTOTTRIB'];

	protected $table = 'EXPEDICAO';

	protected $primaryKey = 'CODEXP';

}
