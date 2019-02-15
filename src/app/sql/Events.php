<?php
namespace src\app\sql;
use \src\App;

class Events
{
	private $pdo;
	public function __construct() {
		$this->pdo = \src\App::getDb();
	}

	/*----------------------------------------------------------------------------*\
			AJOUTER
	\*----------------------------------------------------------------------------*/
	public function add($data = []){
		$start = $data['day'] .' '. $data['start'] .':00';
		$end = $data['day'] .' '. $data['end'] .':00';
		$req = $this->pdo->prepare("
			INSERT INTO calendar (name, start, end, description)
			VALUES(:name, :start, :end, :desc)
		") or die(print_r($pdo->errorInfo()));
		$req->execute(array(
			'name' => $data['name'],
			'start' => $start,
			'end' => $end,
			'desc' => $data['description']
		)) or die(print_r($pdo->errorInfo()));

		return $this->pdo->lastInsertId();
	}

	/*------------------------------------------------------------------------*\
			COMPTER
	\*------------------------------------------------------------------------*/
	public function countAll(){

		$req = $this->pdo->query('
			SELECT COUNT(*) AS nbr
			FROM patients
		') or die(print_r($pdo->errorInfo()));

		$data = $req->fetch();
		return $data['nbr'];
	}

	/*------------------------------------------------------------------------*\
			LIRE
	\*------------------------------------------------------------------------*/

	/**
	 * Récupère un évènement 
	 * @param $id
	 * @return array
	 */
	public function getOne(int $id){
		$req = $this->pdo->prepare('
			SELECT *
			FROM calendar
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($id));
		return $req->fetch();
	}

	/**
	 * Récupère Les évènements commencant entre 2 dates
	 * @param $start
	 * @param $end
	 * @return array
	 */
	public function getEventsBetween($start, $end) {
		$start = $start->format('Y-m-d 00:00:00');
		$end = $end->format('Y-m-d 23:59:59');

		$req = $this->pdo->prepare('
			SELECT *
			FROM calendar
			WHERE start BETWEEN ? AND ?
			ORDER BY start
		') or die(print_r($pdo->errorInfo()));
		$req->execute(array($start, $end));

		return $req->fetchAll();
	}
	/**
	 * Récupère Les évènements commencant entre 2 dates indexé par jour
	 * @param $start
	 * @param $end
	 * @return array
	 */
	public function getEventsBetweenByDay($start, $end) {
		$events = $this->getEventsBetween($start, $end);
		$days = [];
		foreach ($events as $event) {
			$date = explode(' ', $event['start'])[0];
			if (!isset($days[$date])) {
				$days[$date] = [$event];
			}
			else{
				$days[$date][] = $event;
			}
		}
		return $days;
	}
	/*------------------------------------------------------------------------*\
			MODIFIER
	\*------------------------------------------------------------------------*/
	public function update($data = []) {
		$start = $data['day'] .' '. $data['start'] .':00';
		$end = $data['day'] .' '. $data['end'] .':00';
		$req = $this->pdo->prepare('
			UPDATE calendar
			SET name = ?, start = ?, end = ?, description = ?
			WHERE id = ?
		') or die(print_r($pdo->errorInfo()));
		$req->execute([$data['name'], $start, $end, $data['description'], $data['id']]);
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
