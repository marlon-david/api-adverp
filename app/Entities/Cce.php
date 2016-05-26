<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cce extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCCE', 'CODNF', 'NUMCCE', 'CHAVENFE', 'DTEMISSAO', 'CODEVENTO', 'SEQEVENTO', 'CODORGAO', 'FUSOHORARIO', 'DESCRICAO', 'CODRETORNO', 'MSGRETORNO', 'CODSTATUS'];

	protected $table = 'CCE';

}
