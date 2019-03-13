<?php
use \src\app\perso\Calendar;
use \src\app\sql\Events;
use \src\core\Flash;


$oCalendar = new Calendar($_GET['month'] ?? null, $_GET['year'] ?? null);
$oEvents = new Events();

$css='<link rel="stylesheet" href="/css/portfolio/calendar.css">';

$dateMonthYear = $oCalendar->getDate();
$start = $oCalendar->getFirstDay();
$start = $start->format('N') === '1' ? $start : $oCalendar->getFirstDay()->modify('last monday');
$weeks = $oCalendar->getWeeks();
$end = $start->modify('+' . (6 + 7 * ($weeks - 1)) .'day');

$aEvents = $oEvents->getEventsBetweenByDay($start, $end);

include '../views/calendar.phtml';
