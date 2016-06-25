<?php

namespace App\Repositories;

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

}
