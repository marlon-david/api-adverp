<?php

namespace App\Entities;

class Ncm extends FirebirdModel
{

	protected $fillable = ['CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'NCM', 'CADINATIVO', 'ALIQIPI', 'CODIMPORT', 'ALIQPIS', 'ALIQCOFINS', 'ISAUTOMOTIVO', 'ALIQNAC', 'ALIQIMP', 'NVE'];

	protected $table = 'NCMS';

	protected $primaryKey = 'CODNCM';

}
