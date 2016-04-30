<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Produto extends Model implements Transformable
{
	use TransformableTrait;

	protected $fillable = [];

	protected $table = 'PRODUTOS';

	/**
	 * The connection name for the model.
	 *
	 * @var string
	 */
	protected $connection = 'firebird';
}
