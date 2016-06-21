<?php

namespace App\Entities;

class Cfisc extends FirebirdModel
{

	protected $fillable = ['AUXCFISC', 'CFISC', 'DESCRICAO'];

	protected $table = 'CFISC';

}
