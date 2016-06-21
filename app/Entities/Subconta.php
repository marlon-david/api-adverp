<?php

namespace App\Entities;

class Subconta extends FirebirdModel
{

	protected $fillable = ['AUXSUBCONTAS', 'CODSUBCON', 'SUBCONTA', 'TOTRATEIO', 'CADINATIVO', 'LIMITEINDIV', 'LIMITETOTAL', 'ISOBRIOBS'];

	protected $table = 'SUBCONTAS';

	protected $primaryKey = 'CODCON';

}
