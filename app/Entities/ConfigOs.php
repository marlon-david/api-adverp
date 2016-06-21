<?php

namespace App\Entities;

class ConfigOs extends FirebirdModel
{

	protected $fillable = ['AUXCONFIGOS', 'LIMPATEC', 'MAXIMIZADA', 'RECALCFINAN', 'OBRIGESCTEC', 'VERJAABERTA', 'QTDESUGERIDA', 'INICIAFECHADA', 'INICIAMONTADO', 'CONPRODOBRIG2', 'FINALORCQNDVND', 'ORCFINALNAOVND', 'ESTOQBASETROCA', 'USAINDICEPRAZOS', 'APENASTECDALOJA', 'APENASVNDDALOJA', 'PRAZOAUTOMATICO', 'ESCOLHELOJASAIDA', 'CONSOSINIFECHADA', 'FINANCOCULTATAXAS', 'NAOACEITAQTDEZERO', 'INIPREVIGUALPRAZO', 'ESTINSUFICINAOAVISA', 'CONSCODPROINICIANDO', 'PRODGRIDCORJAIMPRESSO', 'CODFORMA', 'CONSDIASANT', 'EXCCANAMBOS', 'CONPRODDESC2APLIC', 'CONSOSNAOLIMPAFILTRO', 'RECNOME1', 'RECNOME2', 'RECNOME3', 'RECNOME4', 'CLIRESTRIMENS', 'QTDESUGPORMODELOS', 'STATUSPORREGRAS', 'CONTPRAZO', 'MASKMAILOSPF', 'MASKMAILOSPJ', 'MASKMAILOSTITPF', 'MASKMAILOSTITPJ', 'DESCALTERAVALOR', 'FATURAMENTOMIN', 'GERAMONTUNICA', 'ORVTOVNDCODTIPOSAI', 'LOTEAUTO', 'LOTETRAZQTDPRAVND'];

	protected $table = 'CONFIGOS';

}
