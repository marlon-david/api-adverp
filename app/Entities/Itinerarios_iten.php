<?php

namespace App\Entities;

class Itinerarios_iten extends FirebirdModel
{

	protected $fillable = ['CODITIN', 'CODOS', 'ORDEM'];

	protected $table = 'ITINERARIOS_ITENS';

	protected $primaryKey = 'CODITIN_ITEM';

}
