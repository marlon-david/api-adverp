<?php

namespace App\Entities;

class Entradalote extends FirebirdModel
{

	protected $fillable = ['AUXENTRADALOTES', 'CODFOR', 'VALIDADE', 'CODLOJAI', 'CODPRO', 'QTDE', 'CODENT', 'NUMITEM', 'CODLOTE', 'FABRICACAO'];

	protected $table = 'ENTRADALOTES';

	protected $primaryKey = 'CODENTLOTE';

}
