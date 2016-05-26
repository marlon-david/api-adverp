<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfcfopprod extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNFCFOPPROD', 'CODUSU', 'CODCFOPC', 'CODCFOPV', 'CODCFOPDC', 'CODCFOPDV', 'CODUSUALT', 'CODCFOPBON', 'CODCFOPTRA', 'CODUSUCRIA', 'CODCFOPCFORA', 'CODCFOPVFORA', 'CODCFOPDCFORA', 'CODCFOPDVFORA', 'CODCFOPBONFORA', 'CODCFOPTRAFORA', 'DATAALT', 'DATACRIA', 'DESCRICAO', 'USACFOPTIPOSAI', 'USACFOPTIPOENT', 'CODCFOPISENTO', 'CODCFOPISENTOF'];

	protected $table = 'NFCFOPPROD';

	protected $primaryKey = 'CODCFOPPROD';

}
