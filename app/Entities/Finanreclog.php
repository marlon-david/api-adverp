<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Finanreclog extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODFIN', 'CODPAR', 'CODCON', 'CODSUBCON', 'CODFOR', 'CODTIPO', 'CODBAN', 'CODCTR', 'CODPARSTAT', 'DTVENCTO', 'VALOR', 'DATACRIA', 'CODUSUCRIA'];

	protected $table = 'FINANRECLOG';

	protected $primaryKey = 'CODFINREC';

}
