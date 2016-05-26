<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Veiculo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXVEICULOS', 'OBS', 'CODCLI', 'CODMOD', 'CODUSUALT', 'CODUSUCRIA', 'CODCOMBUSTIVEL', 'ANO', 'DATAALT', 'DATACRIA', 'PLACA', 'COR', 'MOTOR', 'CHASSIS', 'RENAVAM', 'KMMES', 'CADINATIVO', 'ANOMODELO', 'FROTA', 'CLASSEMICHELIN'];

	protected $table = 'VEICULOS';

	protected $primaryKey = 'CODVEI';

}
