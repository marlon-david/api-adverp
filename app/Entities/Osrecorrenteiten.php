<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Osrecorrenteiten extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODOSREC', 'CODSER', 'QTDE', 'VALOR'];

	protected $table = 'OSRECORRENTEITENS';

	protected $primaryKey = 'CODOSRECITEM';

}
