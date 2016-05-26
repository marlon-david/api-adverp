<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sysconstraint extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSYSCONSTRAINT', 'COMANDO', 'VMIN', 'VMAX', 'CODTAB', 'CODCAMPO', 'CODTABFK', 'CODUSUALT', 'CODCAMPOFK', 'CODUSUCRIA', 'CODCAMPOMOSTRAFK', 'PRIEST', 'ISUPCASC', 'ISDELCASC', 'DATAALT', 'DATACRIA', 'NOME', 'REPLKEY'];

	protected $table = 'SYSCONSTRAINT';

	protected $primaryKey = 'CODCONSTRAINT';

}
