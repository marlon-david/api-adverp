<?php

namespace App\Entities;

class Ositenssertempo extends FirebirdModel
{

	protected $fillable = ['AUXOSITENSSERTEMPOS', 'NUMITEM', 'DATAINI', 'CODSER', 'CODTEC', 'TEMPOGASTO', 'DATAFIN', 'AUXCODTEMP'];

	protected $table = 'OSITENSSERTEMPOS';

	protected $primaryKey = 'CODOS';

}
