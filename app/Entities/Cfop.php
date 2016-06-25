<?php

namespace App\Entities;

class Cfop extends FirebirdModel
{

	protected $fillable = ['AUXCFOP', 'CODUSUALT', 'CODUSUCRIA', 'CODCONTABIL', 'ISENTO', 'ENTSAI', 'DATAALT', 'DATACRIA', 'CFOP', 'OBSIFISENTO', 'CSOSN', 'ISCFOPVENDA', 'ISBAIXAESTOQUE', 'NATOPER', 'OBSNOTA'];

	protected $table = 'CFOP';

	protected $primaryKey = 'CODCFOP';

}
