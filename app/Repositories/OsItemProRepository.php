<?php

namespace App\Repositories;

use App\Entities\OsItemPro;

/**
 * Class OsItemProRepository
 * @package namespace App\Repositories;
 */
class OsItemProRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = OsItemPro::class;

	public function create(array $values)
	{
		$query = $this->newQuery();

		$query->insert($values);

		return $this->findWhere(['CODOS' => $values['CODOS'], 'CODPRO' => $values['CODPRO']]);
	}
}
