<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Map extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMAP', 'DATAALT', 'DATACRIA', 'CODUSUALT', 'CODUSUCRIA', 'ZOOM', 'RWS', 'OP1TIT', 'OP2TIT', 'OP3TIT', 'TITULO', 'COMANDO', 'OP1VLR1', 'OP1VLR2', 'OP2VLR1', 'OP2VLR2', 'OP3VLR1', 'OP3VLR2', 'OP1VLRMAX', 'OP1VLRMIN', 'OP2VLRMAX', 'OP2VLRMIN', 'OP3VLRMAX', 'OP3VLRMIN', 'VALIDASQL', 'ISLATLOG'];

	protected $table = 'MAP';

	protected $primaryKey = 'CODMAP';

}
