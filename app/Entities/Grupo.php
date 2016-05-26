<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Grupo extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXGRUPOS', 'REVKM', 'REVQTDE', 'CODUSUALT', 'CODUSUCRIA', 'COMIESP', 'CUSTOMEDIO', 'DATAALT', 'DATACRIA', 'GRUPO', 'SITE', 'FOTONOME', 'FOTOCAMINHO', 'DESCAUX', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'GRUPOS';

	protected $primaryKey = 'CODGRU';

}
