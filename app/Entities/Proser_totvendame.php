<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Proser_totvendame extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXPROSER_TOTVENDAMES', 'ANO', 'MES', 'CODAUX', 'CODLOJA', 'CODPROSERMES', 'CODGRU', 'CODMAR', 'CODSUBGRU', 'PROSER', 'VLRDESCI', 'VLRBRUTO', 'VLRDESCOS', 'QTDE', 'CUSTO', 'VLRTOTDESC', 'VLRLIQ', 'MBC'];

	protected $table = 'PROSER_TOTVENDAMES';

}
