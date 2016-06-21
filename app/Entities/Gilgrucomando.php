<?php

namespace App\Entities;

class Gilgrucomando extends FirebirdModel
{

	protected $fillable = ['DESCRICAO', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT'];

	protected $table = 'GILGRUCOMANDOS';

	protected $primaryKey = 'CODGILGRU';

}
