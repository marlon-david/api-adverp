<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Inventiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCONF', 'CODPRO', 'QTDE1', 'QTDE2', 'QTDE3', 'QTDEATU', 'ISDIF', 'DIFERENCA', 'QTDEEST'];

	protected $table = 'INVENTITENS';

	protected $primaryKey = 'NUMITEM';

}
