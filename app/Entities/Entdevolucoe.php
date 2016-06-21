<?php

namespace App\Entities;

class Entdevolucoe extends FirebirdModel
{

	protected $fillable = ['AUXENTDEVOLUCOES', 'CODCLI', 'NUMENTDEV', 'CODTIPOENT', 'OBS', 'DATA', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'TOTAL', 'TOTALCREDITO', 'TOTALDEVOLVIDO', 'CODENTDEVSTATUS', 'CLIENTENF', 'DTCOLETADO', 'DTCOLETAPREV', 'CLIENTENFDATA'];

	protected $table = 'ENTDEVOLUCOES';

	protected $primaryKey = 'CODENTDEV';

}
