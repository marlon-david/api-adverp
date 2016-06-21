<?php

namespace App\Entities;

class Finsubcontasrateio extends FirebirdModel
{

	protected $fillable = ['AUXFINSUBCONTASRATEIO', 'CODFINSUBCON', 'CODSUBCON', 'PCTRATEIO', 'CODCTR'];

	protected $table = 'FINSUBCONTASRATEIO';

}
