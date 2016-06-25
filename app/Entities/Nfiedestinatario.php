<?php

namespace App\Entities;

class Nfiedestinatario extends FirebirdModel
{

	protected $fillable = ['DESCRICAO'];

	protected $table = 'NFIEDESTINATARIOS';

	protected $primaryKey = 'CODNFIEDEST';

}
