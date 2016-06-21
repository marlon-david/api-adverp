<?php

namespace App\Entities;

class Cce extends FirebirdModel
{

	protected $fillable = ['CODCCE', 'CODNF', 'NUMCCE', 'CHAVENFE', 'DTEMISSAO', 'CODEVENTO', 'SEQEVENTO', 'CODORGAO', 'FUSOHORARIO', 'DESCRICAO', 'CODRETORNO', 'MSGRETORNO', 'CODSTATUS'];

	protected $table = 'CCE';

}
