<?php

namespace App\Entities;

class Vendedor extends FirebirdModel
{

	protected $fillable = ['AUXVENDEDORES', 'OBS', 'DATACAD', 'CODLOJA', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'BANCARIO', 'VENDEDOR', 'EMAIL', 'ENDERECO', 'FAX', 'RGIE', 'FONE1', 'FONE2', 'CELULAR', 'FANTASIA', 'CONTATO1', 'CONTATO2', 'CPCN', 'COMISSAO', 'CADINATIVO', 'CODFOR', 'OBS2', 'GRUPO', 'SUBGRUPO', 'CODGRUVND', 'CODSUBGRUVND', 'CODIMPORT'];

	protected $table = 'VENDEDORES';

	protected $primaryKey = 'CODVND';

}
