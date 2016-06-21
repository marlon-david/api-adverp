<?php

namespace App\Entities;

class Logfecha extends FirebirdModel
{

	protected $fillable = ['AUXLOGFECHA', 'HORAFECHA', 'DTFECHA', 'TIPO', 'CODFIN', 'NUMPAR', 'CODFECHA', 'CODUSUFECHA', 'CODUSUFILTRO', 'TIPOPAG', 'VREC', 'VPAG', 'SALDO', 'LOJAFILTRO', 'NOMEUSOFILTRO', 'TIPOPAGFILTRO', 'STRCODFIN', 'STRNUMPAR', 'STRCODFINGRD', 'STRNUMPARGRD'];

	protected $table = 'LOGFECHA';

}
