<?php

namespace App\Entities;

class Lognumeronota extends FirebirdModel
{

	protected $fillable = ['AUXLOGNUMERONOTA', 'CODUSUALT', 'DATAALT', 'NUMEROANTERIOR', 'NUMEROPOSTERIOR'];

	protected $table = 'LOGNUMERONOTA';

}
