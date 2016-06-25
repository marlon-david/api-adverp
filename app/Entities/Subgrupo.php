<?php

namespace App\Entities;

class Subgrupo extends FirebirdModel
{

	protected $fillable = ['AUXSUBGRUPOS', 'CODGRU', 'SITE', 'FOTONOME', 'SUBGRUPO', 'FOTOCAMINHO', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'SUBGRUPOS';

	protected $primaryKey = 'CODSUBGRU';

}
