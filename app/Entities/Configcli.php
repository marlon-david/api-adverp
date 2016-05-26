<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Configcli extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXCONFIGCLI', 'COPIAENDENT', 'NAOCRIACODAUT', 'AVISADUPLBYCEP', 'OBRIGUF', 'OBRIGEND', 'OBRIGCEI', 'OBRIGCEP', 'OBRIGCPCN', 'OBRIGRGIE', 'OBRIGVEND', 'OBRIGFONE', 'OBRIGSEXO', 'OBRIGEMAIL', 'OBRIGSTATUS', 'OBRIGCIDADE', 'OBRIGBAIRRO', 'OBRIGDTNASC', 'OBRIGCONTATO', 'LKRAZAOFANTASIA', 'OBRIGCLASSIFICA', 'VENDEDORNAOVECLI'];

	protected $table = 'CONFIGCLI';

}
