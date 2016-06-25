<?php

namespace App\Entities;

class Nfmensagen extends FirebirdModel
{

	protected $fillable = ['CODMENSAGEM', 'MENSAGEM'];

	protected $table = 'NFMENSAGENS';

}
