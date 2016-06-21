<?php

namespace App\Entities;

class Itentv extends FirebirdModel
{

	protected $fillable = ['AUXITENTV', 'CODITENTV', 'ITENTV', 'GRAF1', 'GRAF2', 'REPLKEY'];

	protected $table = 'ITENTV';

}
