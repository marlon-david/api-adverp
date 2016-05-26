<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ncm extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'NCM', 'CADINATIVO', 'ALIQIPI', 'CODIMPORT', 'ALIQPIS', 'ALIQCOFINS', 'ISAUTOMOTIVO', 'ALIQNAC', 'ALIQIMP', 'NVE'];

	protected $table = 'NCMS';

	protected $primaryKey = 'CODNCM';

}
