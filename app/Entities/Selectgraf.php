<?php

namespace App\Entities;

class Selectgraf extends FirebirdModel
{

	protected $fillable = ['AUXSELECTGRAF', 'CODGRAF', 'DESTINO', 'FILTRADO', 'ORDEM', 'MASK', 'MASK2', 'MASK3', 'CAMPOX', 'TITULO', 'CAMPOY1', 'CAMPOY2', 'CAMPOY3', 'COMANDO', 'COMANDOBACK', 'REPLKEY'];

	protected $table = 'SELECTGRAF';

	protected $primaryKey = 'CODSELGRAF';

}
