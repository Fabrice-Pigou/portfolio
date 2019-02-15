<?php
use \src\app\sql\Events;
use \src\core\Flash;

$oEvents = new Events();
$css='<link rel="stylesheet" href="/css/calendar.css">';

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
	$oEvents->delete($_GET['id']);
	Flash::setFlash('l\'évènemnt a bien été supprimé', 'alert');
	header('location:/home');
	die();
}
$event = $oEvents->getOne(intval($_GET['id']));

include '../views/event.phtml';
