<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class MontagemItem extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTAGEMITENS', 'CODPRO', 'NUMITEM', 'CODLOJAI', 'DATA', 'CODOS', 'OSNUMITEM', 'OBS', 'QTDE', 'UNITARIO', 'TOTALPRD', 'ORDEM'];

	protected $table = 'MONTAGEMITENS';

	protected $primaryKey = 'CODMON';

}
