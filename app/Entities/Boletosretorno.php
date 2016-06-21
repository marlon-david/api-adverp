<?php

namespace App\Entities;

class Boletosretorno extends FirebirdModel
{

	protected $fillable = ['NUMDOCBOLETO', 'CODUSUCRIA', 'DATACRIA', 'NOMEARQRET', 'PAGAMENTO', 'DATACREDITO', 'DATAOCORRENCIA', 'VALORPAGO', 'VALORTAXACOBRANCA', 'VALORCREDITO', 'VALORJUROSPAGO', 'VALORMULTAPAGA', 'CODIGOOCORRENCIA', 'MOTIVOSOCORRENCIA', 'VALORDESCONTO', 'VALOROUTROSACRESCIMOS', 'VALORABATIMENTO', 'VALOROUTRASDESPESAS', 'VALORIOF', 'STATUS'];

	protected $table = 'BOLETOSRETORNOS';

	protected $primaryKey = 'CODBOLETOSRETORNOS';

}
