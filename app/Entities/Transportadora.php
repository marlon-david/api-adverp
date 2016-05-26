<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Transportadora extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXTRANSPORTADORA', 'DATACAD', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'FANTASIA', 'SITE', 'TRANSPORTADORA', 'EMAIL', 'ENDERECO', 'FAX1', 'FAX2', 'RGIE', 'FONE1', 'FONE2', 'CONTATO1', 'CONTATO2', 'CPCN', 'OBS', 'CODIMPORT', 'EXPORTASPED', 'RNTRC', 'CIOT'];

	protected $table = 'TRANSPORTADORA';

	protected $primaryKey = 'CODTRA';

}
