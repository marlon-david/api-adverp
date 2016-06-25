<?php

namespace App\Entities;

class Lojasmetasdia extends FirebirdModel
{

	protected $fillable = ['AUXLOJASMETASDIA', 'CODMETA', 'DIA', 'DIASEMANA', 'META1', 'META2'];

	protected $table = 'LOJASMETASDIA';

	protected $primaryKey = 'CODMETADIA';

}
