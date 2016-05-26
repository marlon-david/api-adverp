<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Rave extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXRAVE', 'OBS', 'DATACRIA', 'DATAMODIFICA', 'VERSAO', 'PAISAGEM', 'NOMEREL', 'REPLKEY'];

	protected $table = 'RAVE';

	protected $primaryKey = 'CODRAVE';

}
