<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

abstract class FirebirdModel extends Model
{
	/**
	 * The connection name for the model.
	 *
	 * @var string
	 */
	protected $connection = 'firebird';

	public $timestamps = false;
}
