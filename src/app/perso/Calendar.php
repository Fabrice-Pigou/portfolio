<?php
namespace src\app\perso;

class Calendar
{
	public $days =['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
	private $months = [	'Janvier','Février','Mars','Avril', 'Mai','Juin','Juillet','Aout', 'Septembre','Octobre','Novembre','Décembre'];
	public $month;
	public $year;

	/**
	 * @param $month Le mois compris entre 1 et 12
	 * @param $year L'année
	 */
	public function __construct(int $month = null, int $year = null) {
		if ($month > 12 || $month < 1 || $month === null){
			$this->month = intval(date('m'));
		}
		else $this->month = $month;
		$this->year = ($year === null ? intval(date('Y')) : $year);
	}
	
	/**
	 * retourne la date du mois (Ex: Mai 2018)
	 * @return string
	 */
	public function getDate() {
		return $this->months[$this->month -1] .' '. $this->year;
	}

	/**
	 * Renvoie le premier jour du mois
	 * @return string
	 */
	public function getFirstDay() {
		return new \DatetimeImmutable($this->year .'-'. $this->month . '-01');
	}

	/**
	 * Récupère le nombre de semaine dans le mois
	 * @return int
	 */
	public function getWeeks() {
		$start = $this->getFirstDay();
		$end = $start->modify('+1 month -1 day');

		$startWeek = intval($start->format('W'));
		$endWeek = intval($end->format('W'));

		if ($endWeek === 1) $endWeek = 53;
		$weeks = $endWeek - $startWeek +1;

		if ($weeks < 0) $weeks = intval($end->format('W'));

		return $weeks;
	}

	/**
	 * Est-ce que le jour est dans le mois en cours
	 * @param dateTime $date
	 * @return bool
	 */
	public function inMonth($date) {
		return $this->getFirstDay()->format('Y-M') === $date->format('Y-M');
	}

	/**
	 * Renvoie le mois suivant
	 * @return int
	 */
	public function nextMonth() {
		$month = $this->month + 1;
		$year = $this->year;
		if ($month > 12) {
			$month = 1;
			$year += 1;
		}
		return new Calendar($month, $year);
	}

	/**
	 * Renvoie le mois précédent
	 * @return int
	 */
	public function previousMonth() {
		$month = $this->month - 1;
		$year = $this->year;
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		return new Calendar($month, $year);
	}
}
