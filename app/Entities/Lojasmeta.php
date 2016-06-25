<?php

namespace App\Entities;

class Lojasmeta extends FirebirdModel
{

	protected $fillable = ['AUXLOJASMETAS', 'CODLOJA', 'ANO', 'MES', 'TIPOMETA', 'METATOT1', 'METATOT2', 'ESTIMATIVA1', 'ESTIMATIVA2'];

	protected $table = 'LOJASMETAS';

	protected $primaryKey = 'CODMETA';

}
