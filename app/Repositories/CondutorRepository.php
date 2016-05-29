<?php

namespace App\Repositories;

use App\Entities\Condutor;

/**
 * Class CondutorRepository
 * @package namespace App\Repositories;
 */
class CondutorRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Condutor::class;

}
