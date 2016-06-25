<?php

namespace App\Entities;

class Agraf extends FirebirdModel
{

	protected $fillable = ['AUXAGRAF', 'CODGRAFO', 'CODGRAFDEST', 'DESCRIGRAFO', 'DESCRIGRAFDEST', 'REPLKEY'];

	protected $table = 'AGRAF';

}
