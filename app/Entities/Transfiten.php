<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Transfiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTRANSFITENS', 'NUMITEM', 'OBS', 'CODPRO', 'CODLOJAENTI', 'CODLOJASAII', 'TIPOI', 'BAIXASOLENVI', 'UNITARIO', 'QTDE', 'TINHANF', 'CODCALC', 'ORDEM'];

	protected $table = 'TRANSFITENS';

	protected $primaryKey = 'CODTRANSF';

}
