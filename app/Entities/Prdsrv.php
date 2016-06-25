<?php

namespace App\Entities;

class Prdsrv extends FirebirdModel
{

	protected $fillable = ['AUXPRDSRV', 'COPIA', 'COD1', 'COD2', 'TIPO1', 'TIPO2'];

	protected $table = 'PRDSRV';

}
