<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Montadora extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTADORAS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'MONTADORA'];

	protected $table = 'MONTADORAS';

	protected $primaryKey = 'CODMONTADORA';

}
