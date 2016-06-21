<?php

namespace App\Entities;

class Uf extends FirebirdModel
{

	protected $fillable = ['AUXUF', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'UF', 'ICMS', 'ICMS_INT', 'CEP', 'LATITUDE', 'LONGITUDE', 'ISOPPROPRIA', 'CODBACEN', 'ICMSSUBPADRAO', 'DESCUFST', 'CODLOJA', 'CODUFAUX'];

	protected $table = 'UF';

	protected $primaryKey = 'CODUF';

}
