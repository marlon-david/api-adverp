<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Conta extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCONTAS', 'CODCTR', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'PAGREC', 'INTERNO', 'FLCOMISSAO', 'FLTRANSFIN', 'FLCUSTOSERV', 'FLMERCADORIA', 'CODCONTABIL', 'CONTA', 'CADINATIVO', 'CODGRUCON', 'CODVND', 'LIMITETOTAL', 'ISCOMISSAO', 'ISIMPOSTO', 'ISCOMPRA', 'ISVARIAVEL', 'ISAMORTIZACAO', 'ISFINANCEIRO', 'ISEMPRESTIMO', 'ISIMOBILIZADO', 'ISNAODRE'];

	protected $table = 'CONTAS';

	protected $primaryKey = 'CODCON';

}
