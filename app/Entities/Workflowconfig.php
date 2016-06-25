<?php

namespace App\Entities;

class Workflowconfig extends FirebirdModel
{

	protected $fillable = ['AUXWORKFLOWCONFIG', 'CODCONFIG', 'CODUSUMANDAEMAIL', 'CREDITOSMENSAGEM', 'ENVIAADVMONITOR', 'ISPROMOCIONAL', 'ENVIAGDATA'];

	protected $table = 'WORKFLOWCONFIG';

}
