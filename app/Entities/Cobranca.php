<?php

namespace App\Entities;

class Cobranca extends FirebirdModel
{

	protected $fillable = ['CODCLI', 'CODSTATUSCOB', 'DATACRIA', 'DTPROXCONTATO', 'DESCGERAL', 'ISTUDOQUITADO', 'ISRESOLVIDA', 'CODDEPART', 'DTRESOLVIDA'];

	protected $table = 'COBRANCAS';

	protected $primaryKey = 'CODCOBRANCA';

}
