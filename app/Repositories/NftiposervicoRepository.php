<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Nftiposervico;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class NftiposervicoRepository
 * @package namespace App\Repositories;
 */
class NftiposervicoRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Nftiposervico::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
