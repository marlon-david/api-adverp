<?php

namespace App\Entities;

class Sqlcomando extends FirebirdModel
{

	protected $fillable = ['AUXSQLCOMANDOS', 'CODSQLCOMANDO', 'SQL', 'DESCRICAO'];

	protected $table = 'SQLCOMANDOS';

}
