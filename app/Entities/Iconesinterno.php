<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Iconesinterno extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXICONESINTERNOS', 'EVENTOMENU', 'DESCRICAO', 'ICONEPADRAO'];

	protected $table = 'ICONESINTERNOS';

	protected $primaryKey = 'CODICO';

}
