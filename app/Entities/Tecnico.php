<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tecnico extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTECNICOS', 'OBS', 'DATACAD', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'RAZAO', 'ENDERECO', 'FAX', 'RGIE', 'FONE1', 'FONE2', 'CELULAR', 'CONTATO1', 'CPCN', 'COMISSAO', 'CODLOJA', 'CONTATO2', 'CADINATIVO'];

	protected $table = 'TECNICOS';

	protected $primaryKey = 'CODTEC';

}
