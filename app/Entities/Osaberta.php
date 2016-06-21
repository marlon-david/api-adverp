<?php

namespace App\Entities;

class Osaberta extends FirebirdModel
{

	protected $fillable = ['AUXOSABERTAS', 'CODOS', 'CODUSUEDITANDO'];

	protected $table = 'OSABERTAS';

}
