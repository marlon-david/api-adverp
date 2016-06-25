<?php

namespace App\Entities;

class Nftipoemissao extends FirebirdModel
{

	protected $fillable = ['CODNFTIPOEMISSAO', 'DESCRICAO'];

	protected $table = 'NFTIPOEMISSAO';

}
