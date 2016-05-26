<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nftipoemissao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODNFTIPOEMISSAO', 'DESCRICAO'];

	protected $table = 'NFTIPOEMISSAO';

}
