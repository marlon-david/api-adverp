<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nftotalizaserv extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNFTOTALIZA', 'COD', 'NOME', 'CAMPOOS', 'CAMPOITEM1', 'CAMPOITEM2', 'CAMPOITEM3', 'CAMPOITEM4'];

	protected $table = 'NFTOTALIZASERV';

}
