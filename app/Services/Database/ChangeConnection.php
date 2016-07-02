<?php
namespace App\Services\Database;

use Config;
use App\Entities\User;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class ChangeConnection {

	public static $instance;

	/**
	 * @param string $connection
	 */
	private function __construct($connection) {
		$userId = Authorizer::getResourceOwnerId();
		$user = User::find($userId);

		Config::set('database.connections.' . $connection, [
			'driver'   => 'firebird',
			'host'     => $user->firebird_host,
			'database' => $user->firebird_database,
			'username' => $user->firebird_username,
			'password' => $user->firebird_password,
			'charset'  => 'UTF8'
		]);
	}

	/**
	 * Get Instance
	 *
	 * @return ChangeConnection
	 */
	public static function apply($connection = 'firebird')
	{
		if (null === self::$instance) {
			self::$instance = new self($connection = 'firebird');
		}

		return self::$instance;
	}

}