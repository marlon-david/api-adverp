<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Boletosretorno extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['NUMDOCBOLETO', 'CODUSUCRIA', 'DATACRIA', 'NOMEARQRET', 'PAGAMENTO', 'DATACREDITO', 'DATAOCORRENCIA', 'VALORPAGO', 'VALORTAXACOBRANCA', 'VALORCREDITO', 'VALORJUROSPAGO', 'VALORMULTAPAGA', 'CODIGOOCORRENCIA', 'MOTIVOSOCORRENCIA', 'VALORDESCONTO', 'VALOROUTROSACRESCIMOS', 'VALORABATIMENTO', 'VALOROUTRASDESPESAS', 'VALORIOF', 'STATUS'];

	protected $table = 'BOLETOSRETORNOS';

	protected $primaryKey = 'CODBOLETOSRETORNOS';

}
