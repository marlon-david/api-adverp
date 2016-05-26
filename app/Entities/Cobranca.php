<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cobranca extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCLI', 'CODSTATUSCOB', 'DATACRIA', 'DTPROXCONTATO', 'DESCGERAL', 'ISTUDOQUITADO', 'ISRESOLVIDA', 'CODDEPART', 'DTRESOLVIDA'];

	protected $table = 'COBRANCAS';

	protected $primaryKey = 'CODCOBRANCA';

}
