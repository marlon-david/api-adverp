<?php

namespace App\Entities;

class Lojasdre extends FirebirdModel
{

	protected $fillable = ['CODLOJA', 'MES', 'ANO', 'FATURAMENTOBRUTO', 'IMPOSTOS', 'CMV', 'COMISSOES', 'OUTROSVARIAVEIS', 'DESPFIXAS', 'DESPFINANCEIRAS', 'DEPRECIACAO', 'GANHOSNAOOPERACIONAIS', 'PATENTES', 'CAPITAIS'];

	protected $table = 'LOJASDRE';

	protected $primaryKey = 'CODLOJASDRE';

}
