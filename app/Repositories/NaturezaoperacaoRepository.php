<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Naturezaoperacao;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class NaturezaoperacaoRepository
 * @package namespace App\Repositories;
 */
class NaturezaoperacaoRepository extends BaseRepository implements RepositoryInterface
{
	/**
	 * Specify Model class name
	 *
	 * @return string
	 */
	public function model()
	{
		return Naturezaoperacao::class;
	}

	/**
	 * Boot up the repository, pushing criteria
	 */
	public function boot()
	{
		$this->pushCriteria(app(RequestCriteria::class));
	}
}
