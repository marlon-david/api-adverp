<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Workflow extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXWORKFLOW', 'CODWORK', 'TITMENSAGEM', 'CODBANCO', 'DATAALT', 'DATACRIA', 'DATALIMITE', 'TEXTOMENSAGEM', 'TIPO', 'TITULO', 'INATIVO', 'CODUSUALT', 'CODUSUCRIA', 'CODGRURECEBE', 'CODUSURECEBE', 'COMANDO', 'SAB', 'SEG', 'SEX', 'TER', 'DOM', 'QUA', 'QUI', 'ISOCULTO', 'CODIGO', 'TIPOCMD', 'TIPODEST', 'DESTINATARIOTXT', 'CMDDEST', 'DIAMES', 'HORA', 'VEZES', 'CMDAUXILIAR'];

	protected $table = 'WORKFLOW';

}
