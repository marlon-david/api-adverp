<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Senhasstatus extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSENHASSTATUS', 'CODUSU', 'CODSTATUS', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA'];

	protected $table = 'SENHASSTATUS';

	protected $primaryKey = 'CODSENHASSTATUS';

}
