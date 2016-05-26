<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Fornecedore extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXFORNECEDORES', 'OBS', 'DATACAD', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'FANTASIA', 'SITE', 'RGIE', 'RAZAO', 'EMAIL', 'ENDERECO', 'FAX1', 'FAX2', 'FONE1', 'FONE2', 'CONTATO1', 'CONTATO2', 'CPCN', 'ICMSFRETE', 'CADINATIVO', 'CODPAIS', 'CODIMPORT', 'EXPORTASPED', 'CODCAMPOIMPXML', 'CAMPOIMPXML', 'CREDITAICMS', 'CODNFOPERACAO', 'IDESTRANGEIRO', 'CODNFIEDEST'];

	protected $table = 'FORNECEDORES';

	protected $primaryKey = 'CODFOR';

}
