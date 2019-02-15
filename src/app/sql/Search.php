<?php
namespace src\app\sql;
use \src\App;

class Search
{
	private $pdo;
	public function __construct() {
		$this->pdo = \src\App::getDb();
	}

	public function getSearch($search)
	{
		$search = htmlentities($search);
		$req = $this->pdo->prepare("
			SELECT id, name
			FROM search
			WHERE name LIKE ?
			ORDER BY name
			LIMIT 0,10
		") or die(print_r($pdo->errorInfo()));
		$req->execute(array("%$search%"));
		return $req->fetchall();
	}

	public function getOne(int $id){
		$req = $this->pdo->prepare('
			SELECT *
			FROM search
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($id));
		return $req->fetch();
	}
}
