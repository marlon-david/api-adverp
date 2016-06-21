<?php

namespace App\Entities;

class Nfceiten extends FirebirdModel
{

	protected $fillable = ['CODPRO', 'NUMITEM', 'CODIGO', 'DESCRICAO', 'CFOP', 'UN', 'QTDE', 'UNITARIO', 'DESCONTOPCT', 'TOTALITEM', 'VTOTTRIB', 'CST'];

	protected $table = 'NFCEITENS';

	protected $primaryKey = 'CODNFCE';

}
