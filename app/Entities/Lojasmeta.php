<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lojasmeta extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOJASMETAS', 'CODLOJA', 'ANO', 'MES', 'TIPOMETA', 'METATOT1', 'METATOT2', 'ESTIMATIVA1', 'ESTIMATIVA2'];

	protected $table = 'LOJASMETAS';

	protected $primaryKey = 'CODMETA';

}
