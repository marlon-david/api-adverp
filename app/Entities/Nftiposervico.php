<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nftiposervico extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNFTIPOSERVICO', 'CODUSU', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'UN', 'DESCRICAO', 'ALIQISS', 'ALIQNAC', 'ALIQIMP', 'CODTIPOTRIBUT', 'CODTRIBMUN'];

	protected $table = 'NFTIPOSERVICO';

	protected $primaryKey = 'CODTIPOSERV';

}
