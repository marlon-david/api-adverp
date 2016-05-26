<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Grafico extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXGRAFICOS', 'CODCLI', 'CODIND', 'VERSAO', 'CODTVR', 'CODITENTV', 'CODSUBTVR', 'VERSAOEXE', 'ISCRM', 'ATIVO', 'DELETADO', 'ISSISTEMA', 'ISTIPOAREA', 'ISTIPOLINHA', 'ISTIPOPIZZA', 'ISTIPOBARRAS', 'CODIGO', 'TITULO', 'DESCRICAO', 'OBS', 'CHAMADAESPECIAL', 'REPLKEY'];

	protected $table = 'GRAFICOS';

	protected $primaryKey = 'CODGRAF';

}
