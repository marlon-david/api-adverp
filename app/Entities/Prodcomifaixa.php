<?php

namespace App\Entities;

class Prodcomifaixa extends FirebirdModel
{

	protected $fillable = ['AUXPRODCOMIFAIXAS', 'CODPRO', 'NUMFAIXA', 'PCTFIN', 'PCTINI', 'COMISSAO'];

	protected $table = 'PRODCOMIFAIXAS';

}
