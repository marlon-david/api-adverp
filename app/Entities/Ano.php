<?php

namespace App\Entities;

class Ano extends FirebirdModel
{

	protected $fillable = ['AUXANOS', 'ANO', 'CODANO', 'ISBISEXTO'];

	protected $table = 'ANOS';

}
