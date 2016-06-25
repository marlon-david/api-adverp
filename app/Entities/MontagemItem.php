<?php

namespace App\Entities;

class MontagemItem extends FirebirdModel
{

	protected $fillable = ['AUXMONTAGEMITENS', 'CODPRO', 'NUMITEM', 'CODLOJAI', 'DATA', 'CODOS', 'OSNUMITEM', 'OBS', 'QTDE', 'UNITARIO', 'TOTALPRD', 'ORDEM'];

	protected $table = 'MONTAGEMITENS';

	protected $primaryKey = 'CODMON';

}
