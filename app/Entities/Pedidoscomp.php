<?php

namespace App\Entities;

class Pedidoscomp extends FirebirdModel
{

	protected $fillable = ['AUXPEDIDOSCOMP', 'OBS', 'DATA', 'CODFOR', 'NUMPEDCOMP', 'CODTIPOENT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'PREVISAO', 'CODLOJA', 'CODUSUALT', 'LIBERADO', 'CONDPAG', 'SEGURO', 'TOTALNF', 'FRETEVLR', 'ICMSFRETE', 'TOTVLRICMS', 'OUTRASDESPESAS', 'TOTVLRICMSSUBS', 'CODENTCOT', 'CODPEDSTATUS', 'ISIPINOFRETE'];

	protected $table = 'PEDIDOSCOMP';

	protected $primaryKey = 'CODPEDCOMP';

}
