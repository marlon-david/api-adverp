<?php

namespace App\Entities;

class Inventario extends FirebirdModel
{

	protected $fillable = ['NUMCONF', 'DATA', 'OBS', 'QTDECONF', 'CODENT'];

	protected $table = 'INVENTARIOS';

	protected $primaryKey = 'CODCONF';

}
