<?php

namespace App\Entities;

class Plflookup extends FirebirdModel
{

	protected $fillable = ['TABFONTE', 'FCAMPO1', 'FCAMPO2'];

	protected $table = 'PLFLOOKUP';

}
