<?php

namespace App\Entities;

class Osrecorrenteiten extends FirebirdModel
{

	protected $fillable = ['CODOSREC', 'CODSER', 'QTDE', 'VALOR'];

	protected $table = 'OSRECORRENTEITENS';

	protected $primaryKey = 'CODOSRECITEM';

}
