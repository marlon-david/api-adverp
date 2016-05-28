<?php

namespace App\Repositories;

use App\Entities\Workflowlog;

/**
 * Class WorkflowlogRepository
 * @package namespace App\Repositories;
 */
class WorkflowlogRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Workflowlog::class;

}
