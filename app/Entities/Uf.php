<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Uf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXUF', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'UF', 'ICMS', 'ICMS_INT', 'CEP', 'LATITUDE', 'LONGITUDE', 'ISOPPROPRIA', 'CODBACEN', 'ICMSSUBPADRAO', 'DESCUFST', 'CODLOJA', 'CODUFAUX'];

	protected $table = 'UF';

	protected $primaryKey = 'CODUF';

}
