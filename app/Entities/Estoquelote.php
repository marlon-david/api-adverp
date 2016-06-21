<?php

namespace App\Entities;

class Estoquelote extends FirebirdModel
{

	protected $fillable = ['AUXESTOQUELOTES', 'CODPRO', 'CODLOJA', 'CODFOR', 'CODLOTE', 'DATACRIA', 'VALIDADE', 'QTDEESTOQUE', 'FABRICACAO'];

	protected $table = 'ESTOQUELOTES';

	protected $primaryKey = 'CODESTLOTE';

}
