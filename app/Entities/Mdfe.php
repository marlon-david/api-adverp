<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Mdfe extends FirebirdModel implements Transformable
{
	use TransformableTrait;

	protected $fillable = ['CODLOJA', 'CHAVEMDFE', 'DHEMI', 'UFINI', 'UFFIM', 'CMUNCARREGA', 'XMUNCARREGA', 'QNFE', 'VCARGA', 'CUNID', 'QCARGA', 'INFCPL', 'CMUNDESCARREGA', 'XMUNDESCARREGA', 'RNTRC', 'CIOT', 'CINT', 'PLACA', 'TARA', 'CAPKG', 'CAPM3', 'ISVEICULOPROPRIO', 'PROPCPCN', 'PROPRNTRC', 'PROPNOME', 'PROPIE', 'PROPUF', 'PROPTIPO', 'NUMMDFE', 'TPROD', 'TPCAR', 'UFLICENCIAMENTO', 'CODSTATUS', 'CODMSG', 'MSGRETORNO', 'RECIBOMDFE', 'PROTOCOLOMDFE', 'CODTRA', 'CODVEITRANS'];

	protected $table = 'MDFE';

	protected $primaryKey = 'CODMDFE';

}
