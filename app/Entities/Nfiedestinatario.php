<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfiedestinatario extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DESCRICAO'];

	protected $table = 'NFIEDESTINATARIOS';

	protected $primaryKey = 'CODNFIEDEST';

}
