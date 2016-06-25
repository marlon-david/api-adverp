<?php

namespace App\Entities;

class Servicosmodelo extends FirebirdModel
{

	protected $fillable = ['AUXSERVICOSMODELOS', 'QTDEPARAVND', 'CODMOD'];

	protected $table = 'SERVICOSMODELOS';

	protected $primaryKey = 'CODSER';

}
