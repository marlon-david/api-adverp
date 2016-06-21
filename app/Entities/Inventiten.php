<?php

namespace App\Entities;

class Inventiten extends FirebirdModel
{

	protected $fillable = ['CODCONF', 'CODPRO', 'QTDE1', 'QTDE2', 'QTDE3', 'QTDEATU', 'ISDIF', 'DIFERENCA', 'QTDEEST'];

	protected $table = 'INVENTITENS';

	protected $primaryKey = 'NUMITEM';

}
