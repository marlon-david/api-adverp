<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entdevolucoe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTDEVOLUCOES', 'CODCLI', 'NUMENTDEV', 'CODTIPOENT', 'OBS', 'DATA', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'TOTAL', 'TOTALCREDITO', 'TOTALDEVOLVIDO', 'CODENTDEVSTATUS', 'CLIENTENF', 'DTCOLETADO', 'DTCOLETAPREV', 'CLIENTENFDATA'];

	protected $table = 'ENTDEVOLUCOES';

	protected $primaryKey = 'CODENTDEV';

}
