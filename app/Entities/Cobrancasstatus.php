<?php

namespace App\Entities;

class Cobrancasstatus extends FirebirdModel
{

	protected $fillable = ['STATUSCOB', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CADINATIVO'];

	protected $table = 'COBRANCASSTATUS';

	protected $primaryKey = 'CODSTATUSCOB';

}
