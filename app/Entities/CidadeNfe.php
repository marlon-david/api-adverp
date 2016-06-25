<?php

namespace App\Entities;

class CidadeNfe extends FirebirdModel
{

	protected $fillable = ['AUXCIDADESNFE', 'CODCID', 'CIDADE', 'CODUF', 'UF'];

	protected $table = 'CIDADESNFE';

}
