<?php

namespace App\Repositories;

use App\Entities\Vendedor;

/**
 * Class VendedorRepository
 * @package namespace App\Repositories;
 */
class VendedorRepository extends BaseRepository
{
	/**
	 * @var string
	 */
	protected $modelClass = Vendedor::class;
}
