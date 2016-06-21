<?php

namespace App\Entities;

class Lojasapuracao extends FirebirdModel
{

	protected $fillable = ['AUXLOJASAPURACAO', 'CODLOJA', 'ANO', 'MES', 'VENDAS', 'DFIXAS', 'DVARIAVEIS', 'OUTRASENTRADAS', 'CUSTOMERCADORIAS', 'LUCROBRUTO', 'MC', 'RL'];

	protected $table = 'LOJASAPURACAO';

	protected $primaryKey = 'CODAPURACAO';

}
