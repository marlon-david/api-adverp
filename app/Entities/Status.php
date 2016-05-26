<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Status extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSTATUS', 'CODUSUALT', 'CODUSUCRIA', 'DTENTREGAOBRIGA', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'PODEEXPEDIR', 'EDITAVEL', 'NAOALTVENDA', 'ISPREVENTREGA'];

	protected $table = 'STATUS';

	protected $primaryKey = 'CODSTATUS';

}
