<?php

namespace App\Repositories;

use App\Entities\Workflowconfig;

/**
 * Class WorkflowconfigRepository
 * @package namespace App\Repositories;
 */
class WorkflowconfigRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Workflowconfig::class;

}
