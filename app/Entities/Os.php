<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Os extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['AUXOS', 'OBS', 'OBS2', 'DEFEITO', 'DIAGNOSTICO', 'DESCRPRODUTOS', 'HORAINICIO', 'HORATERMINO', 'DATAOS', 'DATAOSFIN', 'PRAZOGARANTIA', 'CODCLI', 'CODVND', 'CODVEI', 'HODOMETRO', 'CODSTATUS', 'CODUSUALT', 'CODUSUCRIA', 'DATAALT', 'DATACRIA', 'NUMNF', 'DADOSADICIONAIS', 'OS', 'FRETE', 'DESCONTO', 'TOTALDESCONTO', 'DESCBASETROCA', 'COMISSAO', 'TOTAL', 'DESCONTOPCT', 'PARCELASEXC', 'PRAZO', 'DTENTREGA', 'PREVENTREGA', 'COMFINANCIAMENTO', 'CODCON', 'CODTRA', 'CODLOJA', 'CODVND2', 'ORCCODOS', 'CODFORMA', 'CODSITORC', 'CODUSUEXC', 'CODLOJASAI', 'CODOCORORC', 'CODTIPOSAI', 'CODCLICONTATOS', 'TIPO', 'NPRECO', 'TIPOLANC', 'PREVENDA', 'ISENTREGUE', 'MONTADOSOLTO', 'ISLOJAVIRTUAL', 'DATAEXC', 'PRISMA', 'NUMSERIE', 'OBSFIN', 'CONDENTRADA', 'EQUIPAMENTO', 'EXCMOTIVO', 'TOTPROD', 'TOTSERV', 'TOTCUSTPROD', 'TOTCUSTSERV', 'COMISSAO2', 'TOTFRETE', 'TOTICMSSUBST', 'REVCONS', 'TOTCUSTO', 'MBC', 'MKUP', 'PCTMBC', 'OBSEXPED', 'OBSFINAN', 'TOTNF', 'CALCDIM', 'TOTVLRICMS', 'TOTVLRSUBST', 'TOTBCALCICMS', 'TOTBCALCSUBST', 'TOTPRODNF', 'ALIQPIS', 'ALIQCOFINS', 'VLRPIS', 'VLRCOFINS', 'CODOSREC', 'TPFRETE', 'TOTALIPI', 'DESCSUFRAMA', 'ISSUFRAMA', 'BASECALCISS', 'VLRISS', 'ALIQISS', 'TOTNFSERV', 'DESCORGPUBLICO', 'CODTIPO', 'TIPOTRIBNFSE', 'VLRPISNFSE', 'VLRCOFINSNFSE', 'VLRCSLLNFSE', 'VLRINSSNFSE', 'VLRIRNFSE', 'VLRDEDUCOESNFSE', 'VLRDESCINCONDNFSE', 'IGNORACALCDIM', 'DATANFEMISSAO', 'NFDATASAIDA', 'NFMODELO', 'NFSERIE', 'NFCHAVE', 'NFPROTOCOLO', 'NFINDPAG', 'NFTPEMITENTE', 'VTOTTRIB', 'TOTIMPOSTOSIMPLES', 'CODOSORIGEM', 'CREDITODEVOLUCAO', 'VLRICMSDESON', 'EXUF', 'EXEMBARQUE', 'EXDESPACHO', 'OUTRASDESP', 'ALIQAPROXTRIBUT', 'DESCONTONF'];

	protected $table = 'OS';

	protected $primaryKey = 'CODOS';

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'CODCLI');
	}

	public function itensPro()
	{
		return $this->hasMany(OsItemPro::class, 'CODOS', 'CODOS');
	}

}
