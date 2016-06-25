<?php

namespace App\Entities;

class Mdfepercurso extends FirebirdModel
{

	protected $fillable = ['SEQPERCURSO', 'CODUF'];

	protected $table = 'MDFEPERCURSO';

	protected $primaryKey = 'CODMDFE';

}
