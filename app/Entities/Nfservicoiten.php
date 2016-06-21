<?php

namespace App\Entities;

class Nfservicoiten extends FirebirdModel
{

	protected $fillable = ['AUXNFSERVICOITENS', 'NUMITEM', 'CODOS', 'CODSER', 'CODTIPOTRIBUT', 'DESCRICAO', 'UNITARIO', 'TOTALITEN', 'DESCONTO', 'DESCONTOPCT', 'VLRISSRETIDO', 'VLRPIS', 'ALIQPIS', 'VLRCOFINS', 'ALIQCOFINS', 'VLRINSS', 'ALIQINSS', 'VLRIR', 'ALIQIR', 'VLRCSLL', 'ALIQCSLL', 'BASECALCISS', 'VLRISS', 'ALIQISS'];

	protected $table = 'NFSERVICOITENS';

	protected $primaryKey = 'CODNFS';

}
