<?php

namespace App\Entities;

class Syslc extends FirebirdModel
{

	protected $fillable = ['AUXSYSLCS', 'NLCS'];

	protected $table = 'SYSLCS';

	protected $primaryKey = 'MDL';

}
