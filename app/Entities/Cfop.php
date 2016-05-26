<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cfop extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCFOP', 'CODUSUALT', 'CODUSUCRIA', 'CODCONTABIL', 'ISENTO', 'ENTSAI', 'DATAALT', 'DATACRIA', 'CFOP', 'OBSIFISENTO', 'CSOSN', 'ISCFOPVENDA', 'ISBAIXAESTOQUE', 'NATOPER', 'OBSNOTA'];

	protected $table = 'CFOP';

	protected $primaryKey = 'CODCFOP';

}
