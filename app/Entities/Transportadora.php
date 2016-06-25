<?php

namespace App\Entities;

class Transportadora extends FirebirdModel
{

	protected $fillable = ['AUXTRANSPORTADORA', 'DATACAD', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'FANTASIA', 'SITE', 'TRANSPORTADORA', 'EMAIL', 'ENDERECO', 'FAX1', 'FAX2', 'RGIE', 'FONE1', 'FONE2', 'CONTATO1', 'CONTATO2', 'CPCN', 'OBS', 'CODIMPORT', 'EXPORTASPED', 'RNTRC', 'CIOT'];

	protected $table = 'TRANSPORTADORA';

	protected $primaryKey = 'CODTRA';

}
