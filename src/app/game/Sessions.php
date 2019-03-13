<?php
namespace src\app\game;

class Sessions
{
	public function __construct() {
		if (!isset($_SESSION['view'])) {
			$_SESSION['view'] = [
				'region' => 1,
				'house' => 0,
				'floor' => 0,
				'coordinate' => '0.3',
				'direction' => 'n'
			];
		}
	}

	/**
	 * Retourne la région
	 * @return int
	 */
	public static function getRegion() {
		return $_SESSION['view']['region'];
	}
	
	/**
	 * Retourne la maison
	 * @return int
	 */
	public static function getHouse() {
		return $_SESSION['view']['house'];
	}

	/**
	 * Retourne l'étage
	 * @return int
	 */
	public static function getFloor() {
		return $_SESSION['view']['floor'];
	}

	/**
	 * Retourne les coordonnées
	 * @return string
	 */
	public static function getCoordinate() {
		return $_SESSION['view']['coordinate'];
	}

	/**
	 * Retourne la direction
	 * @return int
	 */
	public static function getDirection() {
		return $_SESSION['view']['direction'];
	}

	/**
	 * Modifie la région
	 * @return int
	 */
	public static function setRegion($data) {
		$_SESSION['view']['region'] = $data;
	}

	/**
	 * Modifie la maison
	 * @return int
	 */
	public static function setHouse($data) {
		$_SESSION['view']['house'] = $data;
	}

	/**
	 * Modifie l'étage
	 * @return int
	 */
	public static function setFloor($data) {
		$_SESSION['view']['floor'] = $data;
	}

	/**
	 * Modifie les coordonnées
	 * @return string|int
	 */
	public static function setCoordinate($data) {
		$_SESSION['view']['coordinate'] = $data;
	}

	/**
	 * Modifie la direction
	 * @return string
	 */
	public static function setDirection($data) {
		$_SESSION['view']['direction'] = $data;
	}

	/**
	 * Remet la vue par default
	 * @return string
	 */
	public static function setView() {
		$_SESSION['view'] = [
			'region' => 1,
			'house' => 0,
			'floor' => 0,
			'coordinate' => '0.3',
			'direction' => 'n'
		];
	}
}
