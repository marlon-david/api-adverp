<?php

namespace App\Entities;

class Atividade extends FirebirdModel
{

	protected $fillable = ['AUXATIVIDADES', 'CODUSUPEDE', 'ANDAMENTO', 'ATIVIDADE', 'DATA', 'PRAZO', 'DTENTREGA', 'CODCLI', 'CODUSUFAZ', 'CODUSUALT', 'CODUSUCRIA', 'CANCELADO', 'PRIORIDADE', 'ENVIAREMAIL', 'ENVIARSMSNDIASANTES', 'DATAALT', 'DATACRIA', 'ATIVRESUMIDA'];

	protected $table = 'ATIVIDADES';

	protected $primaryKey = 'CODATIV';

}
