<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Histcli extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXHISTCLI', 'OBS', 'DATA', 'DTLIQ', 'CODCLI', 'CODUSUCRIA', 'CODTIPOCONTATO', 'CODCOBRANCA', 'OBSMENOR'];

	protected $table = 'HISTCLI';

	protected $primaryKey = 'CODHISTCLI';

}
