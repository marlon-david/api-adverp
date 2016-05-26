<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfmensagen extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODMENSAGEM', 'MENSAGEM'];

	protected $table = 'NFMENSAGENS';

}
