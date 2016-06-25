<?php

namespace App\Entities;

class Grafico extends FirebirdModel
{

	protected $fillable = ['AUXGRAFICOS', 'CODCLI', 'CODIND', 'VERSAO', 'CODTVR', 'CODITENTV', 'CODSUBTVR', 'VERSAOEXE', 'ISCRM', 'ATIVO', 'DELETADO', 'ISSISTEMA', 'ISTIPOAREA', 'ISTIPOLINHA', 'ISTIPOPIZZA', 'ISTIPOBARRAS', 'CODIGO', 'TITULO', 'DESCRICAO', 'OBS', 'CHAMADAESPECIAL', 'REPLKEY'];

	protected $table = 'GRAFICOS';

	protected $primaryKey = 'CODGRAF';

}
