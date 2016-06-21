<?php

namespace App\Entities;

class Finanrecorrente extends FirebirdModel
{

	protected $fillable = ['DESCRICAO', 'CODCON', 'CODSUBCON', 'CODFOR', 'CODTIPO', 'CODBAN', 'CODCTR', 'CODPARSTAT', 'VALOR', 'DIA', 'JAN', 'FEV', 'MAR', 'ABR', 'MAI', 'JUN', 'JUL', 'AGO', 'SETE', 'OUT', 'NOV', 'DEZ', 'DATACRIA', 'CODUSUCRIA', 'DATAALT', 'CODUSUALT'];

	protected $table = 'FINANRECORRENTE';

	protected $primaryKey = 'CODFINREC';

}
