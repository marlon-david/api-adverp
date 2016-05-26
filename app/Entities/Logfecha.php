<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Logfecha extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOGFECHA', 'HORAFECHA', 'DTFECHA', 'TIPO', 'CODFIN', 'NUMPAR', 'CODFECHA', 'CODUSUFECHA', 'CODUSUFILTRO', 'TIPOPAG', 'VREC', 'VPAG', 'SALDO', 'LOJAFILTRO', 'NOMEUSOFILTRO', 'TIPOPAGFILTRO', 'STRCODFIN', 'STRNUMPAR', 'STRCODFINGRD', 'STRNUMPARGRD'];

	protected $table = 'LOGFECHA';

}
