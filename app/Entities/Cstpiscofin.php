<?php

namespace App\Entities;

class Cstpiscofin extends FirebirdModel
{

	protected $fillable = ['CST', 'DESCRICAO'];

	protected $table = 'CSTPISCOFINS';

	protected $primaryKey = 'CODCSTPISCOFINS';

}
