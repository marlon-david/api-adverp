<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Loja extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXLOJAS', 'CODUSUALT', 'CODUSUCRIA', 'OSPRECOPADRAO', 'DATAALT', 'DATACRIA', 'UF', 'LOJA', 'NUMERO', 'CEP', 'FAX', 'CIDADE', 'BAIRRO', 'IMUNICIPAL', 'DESCLOJA', 'SMTP', 'SMTPMAIL', 'SMTPPASS', 'SMTPLOGIN', 'CONTATOMAIL', 'ENDERECO', 'TELEFONE', 'COMPLEMENTO', 'IE', 'RAZAO', 'CNPJ', 'CONTATO', 'ISSIMPLES', 'CMUNFG', 'CODREVENDA', 'NOMEREVENDA', 'ALIQICMSSIMPLES', 'CSTPIS', 'CSTCOFINS', 'CNAE', 'IMPOSTOBASE', 'COMISSAOBASE', 'PATHECFSOLUCAO', 'FANTASIA', 'SITE', 'EMAIL', 'TELEFONE2', 'OBS1', 'OBS2', 'OBS3', 'EXPORTASPED', 'ALIQIMPOSTOSIMPLES'];

	protected $table = 'LOJAS';

	protected $primaryKey = 'CODLOJA';

}
