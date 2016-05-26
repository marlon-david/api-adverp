<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contasgrupo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCONTASGRUPO', 'GRUPOCONTA', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'LIMITETOTAL'];

	protected $table = 'CONTASGRUPO';

	protected $primaryKey = 'CODGRUCON';

}
