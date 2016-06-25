<?php

namespace App\Entities;

class Rave extends FirebirdModel
{

	protected $fillable = ['AUXRAVE', 'OBS', 'DATACRIA', 'DATAMODIFICA', 'VERSAO', 'PAISAGEM', 'NOMEREL', 'REPLKEY'];

	protected $table = 'RAVE';

	protected $primaryKey = 'CODRAVE';

}
