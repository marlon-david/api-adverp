<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Configfechacx extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCONFIGFECHACX', 'IMPFATGRU', 'FECHAONCE', 'IMPPARDET', 'TRZSOVENDA', 'VALIDADATAS', 'IMPORCFECHA', 'NAOIMPOSCANC', 'IMPMOVSAIRES', 'SEPARAREABERTA', 'NAOIMPOSSEMFIN', 'NAOIMPOSABERTA', 'OSFINANIDENTICO', 'VALIDAVALORSOMENOR', 'NAOVALIDAREABERTAS', 'CODUSUMANDAMAIL', 'VALOROUVALORPG'];

	protected $table = 'CONFIGFECHACX';

}
