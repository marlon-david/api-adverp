<?php

namespace App\Entities;

class Nftotalizaserv extends FirebirdModel
{

	protected $fillable = ['AUXNFTOTALIZA', 'COD', 'NOME', 'CAMPOOS', 'CAMPOITEM1', 'CAMPOITEM2', 'CAMPOITEM3', 'CAMPOITEM4'];

	protected $table = 'NFTOTALIZASERV';

}
