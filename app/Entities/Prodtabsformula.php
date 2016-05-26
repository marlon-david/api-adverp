<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Prodtabsformula extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPRODTABSFORMULAS', 'LITERALFORMULA', 'TIPOFORM', 'CODCAMPO', 'FORMULA'];

	protected $table = 'PRODTABSFORMULAS';

	protected $primaryKey = 'CODPRODFORMULAS';

}
