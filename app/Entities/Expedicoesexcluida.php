<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Expedicoesexcluida extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXEXPEDICOESEXCLUIDAS', 'OBS', 'PESOLIQUIDO', 'DATA', 'DATAALT', 'DATACRIA', 'DATAEXCLUI', 'PESOBRUTO', 'SEPARADOR', 'CODEXP', 'CODUSUALT', 'CODUSUCRIA', 'CODUSUEXCLUI', 'VOLUME', 'DTENTREGA', 'NUMEXP', 'EMBALADOR', 'CODCLI', 'CODLOJA', 'CONFERENTE', 'PREVENTREGA', 'MOTIVOEXCLUSAO', 'ISULTIMA'];

	protected $table = 'EXPEDICOESEXCLUIDAS';

}
