<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipossolicitacao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['SOLICITACAO', 'ISPEDEAUTORIZACAO', 'AUTORIZACAO', 'ISPEDEHOMOLOGACAO', 'HOMOLOGACAO', 'ISSEMPREPAGO', 'ISCLIENTEESCOLHE', 'PLANO', 'PRAZO', 'CADINATIVO', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'OBS'];

	protected $table = 'TIPOSSOLICITACAO';

	protected $primaryKey = 'CODTIPOSOLI';

}
