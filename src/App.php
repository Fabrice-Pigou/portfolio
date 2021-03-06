<?php
namespace src;
use \src\core\Database;

class App
	{

	const DB_NAME = 'goupy';
	const DB_USER = 'goupy';
	const DB_PASS = 'goupy';
	const DB_HOST = 'localhost';

	private static $database;

	public static function getDb()
	{
		if (self::$database === null) {
			self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
		}
		return self::$database->getpdo();
	}
}
