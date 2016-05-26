<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Marca extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMARCAS', 'CODUSUALT', 'CODUSUCRIA', 'SITE', 'DATAALT', 'DATACRIA', 'FOTONOME', 'MARCA', 'FOTOCAMINHO', 'CADINATIVO', 'CODIMPORT'];

	protected $table = 'MARCAS';

	protected $primaryKey = 'CODMAR';

}
