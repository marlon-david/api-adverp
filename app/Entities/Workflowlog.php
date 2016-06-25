<?php

namespace App\Entities;

class Workflowlog extends FirebirdModel
{

	protected $fillable = ['AUXWORKFLOWLOG', 'DATAUTILIZACAO', 'CODIGO', 'CODCLIADV', 'CODUSUUTILIZA'];

	protected $table = 'WORKFLOWLOG';

}
