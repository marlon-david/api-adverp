<?php

namespace App\Entities;

class Nfregrasserv extends FirebirdModel
{

	protected $fillable = ['AUXNFREGRAS', 'SQLITENS', 'DESCRICAO', 'SQLMESTRE', 'SQLUPITENS', 'SQLUPMESTRE', 'CODREGRA'];

	protected $table = 'NFREGRASSERV';

}
