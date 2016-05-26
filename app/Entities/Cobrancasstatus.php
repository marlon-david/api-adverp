<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cobrancasstatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['STATUSCOB', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CADINATIVO'];

	protected $table = 'COBRANCASSTATUS';

	protected $primaryKey = 'CODSTATUSCOB';

}
