<?php

namespace App\Entities;

class Diasemana extends FirebirdModel
{

	protected $fillable = ['AUXDIASEMANA', 'DIAABREVIADO', 'DIASEMANA'];

	protected $table = 'DIASEMANA';

	protected $primaryKey = 'CODDIASEMANA';

}
