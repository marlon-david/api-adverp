<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Naturezaoperacao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNATUREZAOPERACAO', 'CODNATOPER', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'NATOPER', 'OBSNOTA'];

	protected $table = 'NATUREZAOPERACAO';

	protected $primaryKey = 'CODCFOP';

}
