<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Vendedor extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXVENDEDORES', 'OBS', 'DATACAD', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'BANCARIO', 'VENDEDOR', 'EMAIL', 'ENDERECO', 'FAX', 'RGIE', 'FONE1', 'FONE2', 'CELULAR', 'FANTASIA', 'CONTATO1', 'CONTATO2', 'CPCN', 'COMISSAO', 'CADINATIVO', 'CODFOR', 'OBS2', 'GRUPO', 'SUBGRUPO', 'CODGRUVND', 'CODSUBGRUVND', 'CODIMPORT'];

	protected $table = 'VENDEDORES';

	protected $primaryKey = 'CODVND';

}
