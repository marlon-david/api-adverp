<?php

namespace App\Entities;

class Parcpagcancelada extends FirebirdModel
{

	protected $fillable = ['AUXPARCPAGCANCELADAS', 'CODPAR', 'CODPAGAM'];

	protected $table = 'PARCPAGCANCELADAS';

}
