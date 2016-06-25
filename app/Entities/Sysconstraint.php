<?php

namespace App\Entities;

class Sysconstraint extends FirebirdModel
{

	protected $fillable = ['AUXSYSCONSTRAINT', 'COMANDO', 'VMIN', 'VMAX', 'CODTAB', 'CODCAMPO', 'CODTABFK', 'CODUSUALT', 'CODCAMPOFK', 'CODUSUCRIA', 'CODCAMPOMOSTRAFK', 'PRIEST', 'ISUPCASC', 'ISDELCASC', 'DATAALT', 'DATACRIA', 'NOME', 'REPLKEY'];

	protected $table = 'SYSCONSTRAINT';

	protected $primaryKey = 'CODCONSTRAINT';

}
