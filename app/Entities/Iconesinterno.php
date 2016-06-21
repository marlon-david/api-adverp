<?php

namespace App\Entities;

class Iconesinterno extends FirebirdModel
{

	protected $fillable = ['AUXICONESINTERNOS', 'EVENTOMENU', 'DESCRICAO', 'ICONEPADRAO'];

	protected $table = 'ICONESINTERNOS';

	protected $primaryKey = 'CODICO';

}
