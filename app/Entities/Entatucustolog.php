<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Entatucustolog extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXENTATUCUSTOLOG', 'CODENT', 'CODUSU', 'QTDEOLD', 'QTDECOMPRA', 'CODPRO', 'DATA', 'CUSTOOLD', 'CUSTONEW', 'PRECOTABOLD', 'PRECOTABNEW', 'CUSTOCOMPRA'];

	protected $table = 'ENTATUCUSTOLOG';

}
