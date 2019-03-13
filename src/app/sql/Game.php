<?php
namespace src\app\sql;
use \src\App;

class Game
{
    private $pdo;
	public function __construct() {
        $this->pdo = \src\App::getDb();
	}
    
	/*----------------------------------------------------------------------------*\
            AJOUTER
	\*----------------------------------------------------------------------------*/
	public function add($data = []){
		if(empty($data['view'])) $data['view'] = '{"e": 1, "n": 1, "s": 1, "w": 1}';
		if(empty($data['orientation'])) $data['orientation'] = '{"e": 0, "n": 0, "s": 0, "w": 0}';
		if(empty($data['action'])) $data['action'] = '{"e": 0, "n": 0, "s": 0, "w": 0}';
        $req = $this->pdo->prepare("
        INSERT INTO game (region, house, floor, coordinate, jump, moving, view, orientation, action)
        VALUES(:region, :house, :floor, :coordinate, :jump, :moving, :view,  :orientation, :action)
		") or die(print_r($pdo->errorInfo()));
		$req->execute(array(
            'region' => $data['region'],
			'house' => $data['house'],
            'floor' => $data['floor'],
            'coordinate' => $data['coordinate'],
			'jump' => $data['jump'],
			'moving' => $data['moving'],
			'view' => $data['view'],
			'orientation' => $data['orientation'],
			'action' => $data['action']
            )) or die(print_r($pdo->errorInfo()));
            
            return $this->pdo->lastInsertId();
    }
    
    /*------------------------------------------------------------------------*\
            MODIFIER
    \*------------------------------------------------------------------------*/
    public function update($id) {
			$data = '{"e": 0, "n": 0, "s": 0, "w": 0}';
            $req = $this->pdo->prepare('
            UPDATE game
            SET action = ?
            WHERE id = ?
        ') or die(print_r($pdo->errorInfo()));
        $req->execute([$data, $id]);
    }
    
	public function getAll(){
		$req = $this->pdo->query('
			SELECT *
			FROM game
		') or die(print_r($pdo->errorInfo()));
		return $req->fetchAll();
	}
	/*------------------------------------------------------------------------*\
			LIRE
	\*------------------------------------------------------------------------*/

	/**
	 * Récupère la vue
	 * @param array $view
	 * @return array
	 */
	public function getOne($view =[]){
		$req = $this->pdo->prepare('
			SELECT *
			FROM game
			WHERE region = ? AND house = ? AND floor = ? AND coordinate = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute([$view['region'], $view['house'], $view['floor'], number_format($view['coordinate'], 1)]);
		return $req->fetch();
	}

	/**
	 * Récupère la vue
	 * @param array $view
	 * @return array
	 */
	public function getById($id){
		$req = $this->pdo->prepare('
			SELECT *
			FROM game
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute([$id]);
		return $req->fetch();
	}

	/*------------------------------------------------------------------------*\
			SUPPRIMER
	\*------------------------------------------------------------------------*/
	public function delete($id){

		$req = $this->pdo->prepare('
			DELETE FROM calendar
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($id));

	}
}
