<?php

namespace App\Entities;

class TransfIten extends FirebirdModel
{

	protected $fillable = ['AUXTRANSFITENS', 'NUMITEM', 'OBS', 'CODPRO', 'CODLOJAENTI', 'CODLOJASAII', 'TIPOI', 'BAIXASOLENVI', 'UNITARIO', 'QTDE', 'TINHANF', 'CODCALC', 'ORDEM'];

	protected $table = 'TRANSFITENS';

	protected $primaryKey = 'CODTRANSF';

}
