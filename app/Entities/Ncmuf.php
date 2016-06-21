<?php

namespace App\Entities;

class Ncmuf extends FirebirdModel
{

	protected $fillable = ['CODNCM', 'UF', 'ALIQ_SUBST', 'CODLOJA', 'ALIQREDUCAO', 'ALIQICMSIMPORT', 'CODUFAUX'];

	protected $table = 'NCMUFS';

	protected $primaryKey = 'CODNCMUF';

}
