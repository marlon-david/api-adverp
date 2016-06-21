<?php

namespace App\Entities;

class Nftiposervico extends FirebirdModel
{

	protected $fillable = ['AUXNFTIPOSERVICO', 'CODUSU', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'UN', 'DESCRICAO', 'ALIQISS', 'ALIQNAC', 'ALIQIMP', 'CODTIPOTRIBUT', 'CODTRIBMUN'];

	protected $table = 'NFTIPOSERVICO';

	protected $primaryKey = 'CODTIPOSERV';

}
