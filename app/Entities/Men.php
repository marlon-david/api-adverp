<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Men extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCHAMADO', 'TEXTO', 'CODUSUCRIA', 'DATACRIA', 'NOMEUSUADV', 'CODUSUCLI', 'NOMEUSUCLI', 'EMAILUSUCLI', 'ISIMPORTADA'];

	protected $table = 'MENS';

	protected $primaryKey = 'CODMENSITEM';

}
