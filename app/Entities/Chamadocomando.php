<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Chamadocomando extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCHAMADO', 'CODCLI', 'COMANDO', 'LABEL', 'ISIMPORTADO', 'DTEXECUCAO'];

	protected $table = 'CHAMADOCOMANDOS';

	protected $primaryKey = 'CODCHAMADOCOMANDO';

}
