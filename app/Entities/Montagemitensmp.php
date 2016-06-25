<?php

namespace App\Entities;

class Montagemitensmp extends FirebirdModel
{

	protected $fillable = ['AUXMONTAGEMITENSMP', 'CODPRO', 'NUMITEM', 'NUMITEMMP', 'CODLOJAIMP', 'CODTEC', 'PONTOS', 'CODMONISTATUS', 'PROSER', 'QTDE', 'UNITARIO', 'NUMNOTA', 'NUMLOTE', 'TOTALPRD'];

	protected $table = 'MONTAGEMITENSMP';

	protected $primaryKey = 'CODMON';

}
