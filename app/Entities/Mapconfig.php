<?php

namespace App\Entities;

class Mapconfig extends FirebirdModel
{

	protected $fillable = ['AUXMAPCONFIG', 'CODMAPCONFIG', 'HTMLINI', 'HTMLFIN'];

	protected $table = 'MAPCONFIG';

}
