<?php

namespace App\Entities;

class ParcelaTipoPagStatus extends FirebirdModel
{

	protected $fillable = ['AUXPARCELASTIPOPAGSTATUS', 'PARTIPOSTATUS'];

	protected $table = 'PARCELASTIPOPAGSTATUS';

	protected $primaryKey = 'CODPARSTAT';

}
