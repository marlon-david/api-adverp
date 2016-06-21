<?php

namespace App\Entities;

class Entradaiten extends FirebirdModel
{

	protected $fillable = ['AUXENTRADAITENS', 'NUMITEM', 'CODPRO', 'CODLOJAI', 'COMPRAFABRI', 'TIPOI', 'OBS', 'CODPEDCOMP', 'NUMITEMPEDCOMP', 'CREDITAICMS', 'AJUSTAVALORES', 'REGRAAJUSTECUSTO', 'GARI', 'VLRICMS', 'ALIQSUBST', 'PRECOTABELA', 'DESCPRECTAB', 'VLRICMSSUBST', 'RATFRTSEGDESPICMS', 'SEGURO', 'FRETEVLR', 'OUTRASDESPESAS', 'NAOALTERAESTOQUE', 'ICMS', 'UNITARIO', 'IPI', 'QTDE', 'CUSTOOLD', 'UNITARIOSEMIPI', 'TOTALPRD', 'PRECOTABELACOMDESC', 'CFOP', 'CST', 'IPIFRETE', 'ALIQINTICMSLOJA', 'ISIMPORTADOXML', 'TINHANF', 'BASEPIS', 'BASEIPI', 'BASECOFINS', 'BCALCICMS', 'BCALCSUBST', 'VLRIPI', 'ALIQPIS', 'ALIQCOFINS', 'VLRPIS', 'VLRCOFINS', 'TOTPRODFRETE', 'ICMSDESONERACAO', 'CSTIPI', 'CSTPIS', 'CSTCOFINS', 'CODCALC', 'ORDEM'];

	protected $table = 'ENTRADAITENS';

	protected $primaryKey = 'CODENT';

}
