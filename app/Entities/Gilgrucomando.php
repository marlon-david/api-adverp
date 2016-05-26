<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Gilgrucomando extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT'];

	protected $table = 'GILGRUCOMANDOS';

	protected $primaryKey = 'CODGILGRU';

}
