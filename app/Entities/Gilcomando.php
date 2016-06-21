<?php

namespace App\Entities;

class Gilcomando extends FirebirdModel
{

	protected $fillable = ['COMANDO', 'DESCRICAO', 'CAMPOCHAVE', 'CAMPOVERIF1', 'CAMPOVERIF2', 'CAMPOSEXIBE', 'PRIORIDADE', 'ISENVIAEMAIL', 'ISNAOMOSTRATELA', 'CODGILGRU', 'CODTELA', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT', 'AUX1', 'CADINATIVO', 'PONTOENTRADA'];

	protected $table = 'GILCOMANDOS';

	protected $primaryKey = 'CODCOM';

}
