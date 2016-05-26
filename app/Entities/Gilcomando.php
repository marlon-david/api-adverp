<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Gilcomando extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['COMANDO', 'DESCRICAO', 'CAMPOCHAVE', 'CAMPOVERIF1', 'CAMPOVERIF2', 'CAMPOSEXIBE', 'PRIORIDADE', 'ISENVIAEMAIL', 'ISNAOMOSTRATELA', 'CODGILGRU', 'CODTELA', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT', 'AUX1', 'CADINATIVO', 'PONTOENTRADA'];

	protected $table = 'GILCOMANDOS';

	protected $primaryKey = 'CODCOM';

}
