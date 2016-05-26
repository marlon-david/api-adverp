<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Selectgraf extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSELECTGRAF', 'CODGRAF', 'DESTINO', 'FILTRADO', 'ORDEM', 'MASK', 'MASK2', 'MASK3', 'CAMPOX', 'TITULO', 'CAMPOY1', 'CAMPOY2', 'CAMPOY3', 'COMANDO', 'COMANDOBACK', 'REPLKEY'];

	protected $table = 'SELECTGRAF';

	protected $primaryKey = 'CODSELGRAF';

}
