<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Finanrecorrente extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO', 'CODCON', 'CODSUBCON', 'CODFOR', 'CODTIPO', 'CODBAN', 'CODCTR', 'CODPARSTAT', 'VALOR', 'DIA', 'JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SETE', 'OUT', 'NOV', 'DEZ', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT'];

	protected $table = 'FINANRECORRENTE';

	protected $primaryKey = 'CODFINREC';

}
