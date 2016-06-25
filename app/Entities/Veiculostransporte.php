<?php

namespace App\Entities;

class Veiculostransporte extends FirebirdModel
{

	protected $fillable = ['CINT', 'PLACA', 'TARA', 'CAPKG', 'CAPM3', 'TPROD', 'TPCAR', 'UFLICENCIAMENTO', 'ISVEICULOPROPRIO', 'PROPCPCN', 'PROPRNTRC', 'PROPNOME', 'PROPIE', 'PROPUF', 'PROPTIPO', 'CODTRA', 'CADINATIVO', 'AUXVEICULOSTRANSPORTE', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA'];

	protected $table = 'VEICULOSTRANSPORTE';

	protected $primaryKey = 'CODVEITRANS';

}
