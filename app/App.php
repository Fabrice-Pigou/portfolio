<?php
namespace app;
use \app\core\Database;

class App
	{

	const DB_NAME = 'blog';
	const DB_USER = 'goupy';
	const DB_PASS = 'goupy';
	const DB_HOST = 'localhiost';

	private static $database;

	public static function getDb()
	{
		if (self::$database === null) {

			self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
		}

		return self::$database;
	}
}