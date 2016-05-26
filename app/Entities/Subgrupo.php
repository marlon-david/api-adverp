<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Subgrupo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXSUBGRUPOS', 'CODSUBGRU', 'SITE', 'FOTONOME', 'SUBGRUPO', 'FOTOCAMINHO', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'SUBGRUPOS';

	protected $primaryKey = 'CODGRU';

}
