<?php

namespace App\Entities;

class Montagensstatussitem extends FirebirdModel
{

	protected $fillable = ['AUXMONTAGENSSTATUSITEM', 'STATUS'];

	protected $table = 'MONTAGENSSTATUSITEM';

	protected $primaryKey = 'CODMONISTATUS';

}
