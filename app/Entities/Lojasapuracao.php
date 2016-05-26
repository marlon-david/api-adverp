<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lojasapuracao extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOJASAPURACAO', 'CODLOJA', 'ANO', 'MES', 'VENDAS', 'DFIXAS', 'DVARIAVEIS', 'OUTRASENTRADAS', 'CUSTOMERCADORIAS', 'LUCROBRUTO', 'MC', 'RL'];

	protected $table = 'LOJASAPURACAO';

	protected $primaryKey = 'CODAPURACAO';

}
