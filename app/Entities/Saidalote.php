<?php

namespace App\Entities;

class Saidalote extends FirebirdModel
{

	protected $fillable = ['AUXSAIDALOTES', 'CODPRO', 'QTDE', 'TIPO', 'CODFOR', 'CODSAI', 'NUMITEM', 'CODLOTE', 'CODLOJAI', 'VALIDADE', 'DATACRIA', 'FABRICACAO'];

	protected $table = 'SAIDALOTES';

	protected $primaryKey = 'CODSAILOTE';

}
