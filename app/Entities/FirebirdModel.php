<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Services\Database\ChangeConnection;

abstract class FirebirdModel extends Model
{
	/**
	 * The connection name for the model.
	 *
	 * @var string
	 */
	protected $connection = 'firebird';

	public $timestamps = false;

	public function __construct()
	{
		ChangeConnection::apply($this->connection);
	}

	/*
	 * Para corrigir o bug "The Response content must be a string or object implementing __toString(), boolean given"
	 */
	public function setRawAttributes(array $attributes, $sync = false)
	{
		foreach ($attributes as $index => $attribute)
		{
			$attributes[$index] = utf8_encode($attribute);
		}
		return parent::setRawAttributes($attributes, $sync);
	}
}
