<?php

namespace App\Entities;

class Naturezaoperacao extends FirebirdModel
{

	protected $fillable = ['AUXNATUREZAOPERACAO', 'CODNATOPER', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'NATOPER', 'OBSNOTA'];

	protected $table = 'NATUREZAOPERACAO';

	protected $primaryKey = 'CODCFOP';

}
