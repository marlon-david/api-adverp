<?php

namespace App\Entities;

class Nfregra extends FirebirdModel
{

	protected $fillable = ['AUXNFREGRAS', 'SQLITENS', 'DESCRICAO', 'SQLMESTRE', 'SQLUPITENS', 'SQLUPMESTRE', 'CODREGRA'];

	protected $table = 'NFREGRAS';

}
