<?php

namespace App\Repositories;

use App\Entities\Workflow;

/**
 * Class WorkflowRepository
 * @package namespace App\Repositories;
 */
class WorkflowRepository extends BaseRepository
{

	/**
	 * @var string
	 */
	protected $modelClass = Workflow::class;

}
