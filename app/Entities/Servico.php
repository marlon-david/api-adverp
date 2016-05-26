<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Servico extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSERVICOS', 'CODGRU', 'TROCAKM', 'TROCAMES', 'CODSUBGRU', 'CODUSUALT', 'CODUSUCRIA', 'CODTIPOSERV', 'DATAALT', 'DATACRIA', 'UN', 'CODIGO', 'DESCRICAO', 'COMISSAO', 'COMISSAOTEC', 'QTDEPARAVND', 'CUSTO', 'PRECOVENDA', 'PRECOMINIMO', 'MARGEM', 'MARGEMMIN', 'ISS', 'COMISSAOVLR', 'APLICACAO', 'CADINATIVO', 'ISSQN', 'CODTIPOTRIBUT'];

	protected $table = 'SERVICOS';

	protected $primaryKey = 'CODSER';

}
