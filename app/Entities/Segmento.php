<?php

namespace App\Entities;

class Segmento extends FirebirdModel
{

	protected $fillable = ['AUXSEGMENTOS', 'EMAILCONTEUDO', 'CODCAMP', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'SEGMENTO', 'EMAILASSUNTO', 'EMAILARQCONTEUDO'];

	protected $table = 'SEGMENTOS';

	protected $primaryKey = 'CODSEGMENTO';

}
