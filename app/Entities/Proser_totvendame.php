<?php

namespace App\Entities;

class Proser_totvendame extends FirebirdModel
{

	protected $fillable = ['AUXPROSER_TOTVENDAMES', 'ANO', 'MES', 'CODAUX', 'CODLOJA', 'CODPROSERMES', 'CODGRU', 'CODMAR', 'CODSUBGRU', 'PROSER', 'VLRDESCI', 'VLRBRUTO', 'VLRDESCOS', 'QTDE', 'CUSTO', 'VLRTOTDESC', 'VLRLIQ', 'MBC'];

	protected $table = 'PROSER_TOTVENDAMES';

}
