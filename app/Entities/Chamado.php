<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Chamado extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['DATACRIA', 'CODRESP', 'CODCLI', 'CODTIPOSOLI', 'DESCRICAO', 'SOLUCAO', 'PRAZO', 'DTFINALIZADO', 'OS', 'CODUSUCLI', 'NOMEUSUCLI', 'EMAILUSUCLI', 'ISPENDCLI', 'DTPENDCLI', 'VALORSERV', 'TEMPOSERV', 'CODSTATUSFINAN', 'CODSTATUSHOMO', 'CODSTATUSAUTORI', 'CODUSUCRIA', 'CODUSUALT', 'ISIMPORTADO', 'ISREABERTO', 'ISVISTOFINALIZADO', 'ISPARADO', 'CODTELA', 'PRIORIDADE', 'CODCHAMADOORIGEM', 'PAGDIRETO', 'CODOS', 'PAGQTDE', 'PAGDIA'];

	protected $table = 'CHAMADOS';

	protected $primaryKey = 'CODCHAMADO';

}
