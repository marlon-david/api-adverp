<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Atividade extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXATIVIDADES', 'CODUSUPEDE', 'ANDAMENTO', 'ATIVIDADE', 'DATA', 'PRAZO', 'DTENTREGA', 'CODCLI', 'CODUSUFAZ', 'CODUSUALT', 'CODUSUCRIA', 'CANCELADO', 'PRIORIDADE', 'ENVIAREMAIL', 'ENVIARSMSNDIASANTES', 'DATAALT', 'DATACRIA', 'ATIVRESUMIDA'];

	protected $table = 'ATIVIDADES';

	protected $primaryKey = 'CODATIV';

}
