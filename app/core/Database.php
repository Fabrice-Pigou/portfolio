<?php

namespace app\core;

use \PDO;

class Database{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;

	private $pdo;

	public function __construct($db_name, $db_user, $db_pass, $db_host)
	{
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

	public function getPDO()
	{
		if ($this->pdo === null) {
			$pdo = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name, $this->db_user, $this->db_pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

			$this->pdo = $pdo;
		}

		return $this->pdo;
	}
}