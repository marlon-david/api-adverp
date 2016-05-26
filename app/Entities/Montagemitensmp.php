<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Montagemitensmp extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMONTAGEMITENSMP', 'CODPRO', 'NUMITEM', 'NUMITEMMP', 'CODLOJAIMP', 'CODTEC', 'PONTOS', 'CODMONISTATUS', 'PROSER', 'QTDE', 'UNITARIO', 'NUMNOTA', 'NUMLOTE', 'TOTALPRD'];

	protected $table = 'MONTAGEMITENSMP';

	protected $primaryKey = 'CODMON';

}
