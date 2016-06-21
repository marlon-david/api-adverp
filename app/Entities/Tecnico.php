<?php

namespace App\Entities;

class Tecnico extends FirebirdModel
{

	protected $fillable = ['AUXTECNICOS', 'OBS', 'DATACAD', 'CODUSUALT', 'CODUSUCRIA', 'FISJUR', 'DATAALT', 'DATACRIA', 'UF', 'CEP', 'CIDADE', 'BAIRRO', 'RAZAO', 'ENDERECO', 'FAX', 'RGIE', 'FONE1', 'FONE2', 'CELULAR', 'CONTATO1', 'CPCN', 'COMISSAO', 'CODLOJA', 'CONTATO2', 'CADINATIVO'];

	protected $table = 'TECNICOS';

	protected $primaryKey = 'CODTEC';

}
