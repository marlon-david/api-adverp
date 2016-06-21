<?php

namespace App\Entities;

class Status extends FirebirdModel
{

	protected $fillable = ['AUXSTATUS', 'CODUSUALT', 'CODUSUCRIA', 'DTENTREGAOBRIGA', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'PODEEXPEDIR', 'EDITAVEL', 'NAOALTVENDA', 'ISPREVENTREGA'];

	protected $table = 'STATUS';

	protected $primaryKey = 'CODSTATUS';

}
