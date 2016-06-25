<?php

namespace App\Entities;

class Veiculo extends FirebirdModel
{

	protected $fillable = ['AUXVEICULOS', 'OBS', 'CODCLI', 'CODMOD', 'CODUSUALT', 'CODUSUCRIA', 'CODCOMBUSTIVEL', 'ANO', 'DATAALT', 'DATACRIA', 'PLACA', 'COR', 'MOTOR', 'CHASSIS', 'RENAVAM', 'KMMES', 'CADINATIVO', 'ANOMODELO', 'FROTA', 'CLASSEMICHELIN'];

	protected $table = 'VEICULOS';

	protected $primaryKey = 'CODVEI';

}
