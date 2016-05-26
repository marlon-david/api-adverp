<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mktcampanha extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMKTCAMPANHAS', 'EMAILCONTEUDO', 'DATA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CAMPANHA', 'EMAILASSUNTO', 'EMAILARQCONTEUDO'];

	protected $table = 'MKTCAMPANHAS';

	protected $primaryKey = 'CODCAMP';

}
