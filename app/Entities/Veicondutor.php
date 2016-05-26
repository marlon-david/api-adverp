<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Veicondutor extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODCONDUTOR'];

	protected $table = 'VEICONDUTOR';

	protected $primaryKey = 'CODVEITRANS';

}
