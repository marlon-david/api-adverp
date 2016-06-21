<?php

namespace App\Entities;

class Entatucustolog extends FirebirdModel
{

	protected $fillable = ['AUXENTATUCUSTOLOG', 'CODENT', 'CODUSU', 'QTDEOLD', 'QTDECOMPRA', 'CODPRO', 'DATA', 'CUSTOOLD', 'CUSTONEW', 'PRECOTABOLD', 'PRECOTABNEW', 'CUSTOCOMPRA'];

	protected $table = 'ENTATUCUSTOLOG';

}
