<?php

namespace App\Entities;

class Itinerario extends FirebirdModel
{

	protected $fillable = ['NUMITIN', 'DATA', 'CODTRA', 'DATASAI', 'CEPINI', 'LOGINI', 'NUMINI', 'CEPFIM', 'LOGFIM', 'NUMFIM'];

	protected $table = 'ITINERARIOS';

	protected $primaryKey = 'CODITIN';

}
