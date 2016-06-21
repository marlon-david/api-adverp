<?php

namespace App\Entities;

class Tipossolicitacao extends FirebirdModel
{

	protected $fillable = ['SOLICITACAO', 'ISPEDEAUTORIZACAO', 'AUTORIZACAO', 'ISPEDEHOMOLOGACAO', 'HOMOLOGACAO', 'ISSEMPREPAGO', 'ISCLIENTEESCOLHE', 'PLANO', 'PRAZO', 'CADINATIVO', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'OBS'];

	protected $table = 'TIPOSSOLICITACAO';

	protected $primaryKey = 'CODTIPOSOLI';

}
