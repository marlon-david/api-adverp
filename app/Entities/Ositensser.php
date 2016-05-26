<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ositensser extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOSITENSSER', 'NUMITEM', 'OBSLONGA', 'REVHISTORICO', 'REVENVMENSCEL', 'REVRESOLVIDO', 'ORDEM', 'CODSER', 'CODTEC', 'CODVND', 'CODOSORC', 'NUMITEMORC', 'GARANTIA', 'COMISSAO', 'QTDE', 'CUSTO', 'UNITARIO', 'DESCONTO', 'DESCONTOPCT', 'PCTDESCDILUIDO', 'ISCOMIESP', 'TEMPOGASTO', 'AUXCODOSSER', 'PRECOBASE', 'UNITCOMDESC', 'TOTALSRV', 'UNITCOMDESCDILUIDO', 'TOTALCOMDESC', 'BASECALCISS', 'VLRISS', 'ALIQISS', 'VLRPISNFSE', 'VLRCOFINSNFSE', 'VLRCSLLNFSE', 'VLRINSSNFSE', 'VLRIRNFSE'];

	protected $table = 'OSITENSSER';

	protected $primaryKey = 'CODOS';

}
