<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Veiculostransporte extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CINT', 'PLACA', 'TARA', 'CAPKG', 'CAPM3', 'TPROD', 'TPCAR', 'UFLICENCIAMENTO', 'ISVEICULOPROPRIO', 'PROPCPCN', 'PROPRNTRC', 'PROPNOME', 'PROPIE', 'PROPUF', 'PROPTIPO', 'CODTRA', 'CADINATIVO', 'AUXVEICULOSTRANSPORTE', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'VEICULOSTRANSPORTE';

	protected $primaryKey = 'CODVEITRANS';

}
