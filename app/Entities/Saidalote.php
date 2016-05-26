<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Saidalote extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSAIDALOTES', 'CODPRO', 'QTDE', 'TIPO', 'CODFOR', 'CODSAI', 'NUMITEM', 'CODLOTE', 'CODLOJAI', 'VALIDADE', 'DATACRIA', 'FABRICACAO'];

	protected $table = 'SAIDALOTES';

	protected $primaryKey = 'CODSAILOTE';

}
