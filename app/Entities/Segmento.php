<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Segmento extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSEGMENTOS', 'EMAILCONTEUDO', 'CODCAMP', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'SEGMENTO', 'EMAILASSUNTO', 'EMAILARQCONTEUDO'];

	protected $table = 'SEGMENTOS';

	protected $primaryKey = 'CODSEGMENTO';

}
