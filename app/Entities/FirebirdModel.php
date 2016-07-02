<?php

namespace App\Entities;

use DB;
use Config;
use Illuminate\Database\Eloquent\Model;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

abstract class FirebirdModel extends Model
{
	/**
	 * The connection name for the model.
	 *
	 * @var string
	 */
	protected $connection = 'firebird';

	public $timestamps = false;

	/**
	* @var User
	*/
	protected $user;

	public function __construct()
	{
		$userId = Authorizer::getResourceOwnerId();
		$this->user = User::find($userId);

		Config::set('database.connections.' . $this->connection, [
			'driver'   => 'firebird',
			'host'     => $this->user->firebird_host,
			'database' => $this->user->firebird_database,
			'username' => $this->user->firebird_username,
			'password' => $this->user->firebird_password,
			'charset'  => 'UTF8'
		]);
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
