<?php

namespace App\Entities;

class Novo extends FirebirdModel
{

	protected $fillable = ['AUXNOVOS', 'FINAN', 'CUPOM', 'SAIDAS', 'TRANSF', 'ICONES', 'ENTRADAS', 'NUMDOCBOLETO', 'NUMCODBARRA', 'OS'];

	protected $table = 'NOVOS';

}
