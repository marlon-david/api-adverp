<?php

namespace App\Entities;

class Gilgrusenha extends FirebirdModel
{

	protected $fillable = ['CODGILGRU', 'CODUSU'];

	protected $table = 'GILGRUSENHAS';

}
