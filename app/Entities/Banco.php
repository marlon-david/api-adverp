<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Banco extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXBANCOS', 'LIMITE', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'DIGITOCC', 'DIGITOAG', 'CARTEIRA', 'NUMEROBANCO', 'BANCO', 'NOMECEDENTE', 'AG', 'CC', 'NOSSONUMERO', 'SEQUENCIACNAB', 'NOMEARQUIVOCNAB', 'LAYOUTCNAB', 'CODIGOCEDENTE', 'TIPOIMPRESSAOCNAB', 'DIRETORIOCNAB', 'ARQUIVOLICENCACOBREBEMX', 'CADINATIVO', 'JUROS', 'CODPORTADOR'];

	protected $table = 'BANCOS';

	protected $primaryKey = 'CODBAN';

}
