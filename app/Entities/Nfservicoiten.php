<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nfservicoiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXNFSERVICOITENS', 'NUMITEM', 'CODOS', 'CODSER', 'CODTIPOTRIBUT', 'DESCRICAO', 'UNITARIO', 'TOTALITEN', 'DESCONTO', 'DESCONTOPCT', 'VLRISSRETIDO', 'VLRPIS', 'ALIQPIS', 'VLRCOFINS', 'ALIQCOFINS', 'VLRINSS', 'ALIQINSS', 'VLRIR', 'ALIQIR', 'VLRCSLL', 'ALIQCSLL', 'BASECALCISS', 'VLRISS', 'ALIQISS'];

	protected $table = 'NFSERVICOITENS';

	protected $primaryKey = 'CODNFS';

}
