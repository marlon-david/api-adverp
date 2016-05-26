<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mapcli extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXMAPCLI', 'ZOOM', 'OP1VLR1', 'OP1VLR2', 'OP1VLRMAX', 'OP1VLRMIN', 'RWS', 'OP2VLR1', 'OP2VLR2', 'OP3VLR1', 'OP3VLR2', 'OP2VLRMAX', 'OP2VLRMIN', 'OP3VLRMAX', 'OP3VLRMIN', 'FILTROADIC'];

	protected $table = 'MAPCLI';

	protected $primaryKey = 'CODMAP';

}
