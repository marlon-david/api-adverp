<?php

namespace App\Entities;

class Mens extends FirebirdModel
{

	protected $fillable = ['CODCHAMADO', 'TEXTO', 'CODUSUCRIA', 'DATACRIA', 'NOMEUSUADV', 'CODUSUCLI', 'NOMEUSUCLI', 'EMAILUSUCLI', 'ISIMPORTADA'];

	protected $table = 'MENS';

	protected $primaryKey = 'CODMENSITEM';

}
