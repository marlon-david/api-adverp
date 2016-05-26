<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Workflowconfig extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXWORKFLOWCONFIG', 'CODCONFIG', 'CODUSUMANDAEMAIL', 'CREDITOSMENSAGEM', 'ENVIAADVMONITOR', 'ISPROMOCIONAL', 'ENVIAGDATA'];

	protected $table = 'WORKFLOWCONFIG';

}
