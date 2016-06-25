<?php

namespace App\Entities;

class Nftotaliza extends FirebirdModel
{

	protected $fillable = ['AUXNFTOTALIZA', 'COD', 'NOME', 'CAMPOOS', 'CAMPOITEM1', 'CAMPOITEM2', 'CAMPOITEM3', 'CAMPOITEM4'];

	protected $table = 'NFTOTALIZA';

}
