<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipoentrada extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTIPOENTRADAS', 'CODUSUALT', 'CODUSUCRIA', 'NAOATUCUSTO', 'QTDENEGATIVA', 'REAJUSTECUSTOORGPUBL', 'DATAALT', 'DATACRIA', 'TIPOENTRADA', 'NAOALTERAESTOQUE', 'NAOGERAFINAN', 'ISIMPORTACAO', 'CADINATIVO', 'ISTRIBUTAVEL', 'CST', 'OBSNF', 'ZERAIPI', 'ZERAICMS', 'ALTESTFISICO', 'ABREV', 'CODTIPONF'];

	protected $table = 'TIPOENTRADAS';

	protected $primaryKey = 'CODTIPOENT';

}
