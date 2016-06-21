<?php

namespace App\Entities;

class Mktcampanha extends FirebirdModel
{

	protected $fillable = ['AUXMKTCAMPANHAS', 'EMAILCONTEUDO', 'DATA', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'CAMPANHA', 'EMAILASSUNTO', 'EMAILARQCONTEUDO'];

	protected $table = 'MKTCAMPANHAS';

	protected $primaryKey = 'CODCAMP';

}
