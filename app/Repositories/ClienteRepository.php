<?php

namespace App\Repositories;

use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\Cliente;
use App\Validators\ClienteValidator;

/**
 * Class ClienteRepository
 * @package namespace App\Repositories;
 */
class ClienteRepository extends BaseRepository
{
    /**
     * @var string
     */
    protected $modelClass = Cliente::class;

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
