<?php
$script = '<script type="text/javascript" src="js/game/game.js"></script>';
$css= '<link rel="stylesheet" href="/css/portfolio/game.css">';

use src\app\game\Sessions;
use src\app\game\Actions;
use src\app\sql\Game;

$oSessions = new Sessions;
$oActions = new Actions;
$oGame = new Game;

//	Si une action est envoyée
if (isset($_GET['action']) && !empty($_GET['action'])) {
	$oActions->action($_GET);
	header('location:/game');
	die();
}

//	On récupère toutes les infos sur la position
$position = $oGame->getOne($_SESSION['view']);

if ($position === false) {
	$oSessions->setView();
	header('location:/game');
	die();
}

$position['jump'] = json_decode($position['jump'], 10);
$position['view'] = json_decode($position['view'], 10);
$position['moving'] = json_decode($position['moving'], 10);
$position['orientation'] = json_decode($position['orientation'], 10);
$position['action'] = json_decode($position['action'], 10);

if ($position['orientation'][$oSessions::getDirection()] !== 0) {
	$oSessions->setDirection($position['orientation'][$oSessions::getDirection()]);
}
if ($position['action'][$oSessions::getDirection()] !== 0) {
	$action = explode(':', $position['action'][$oSessions::getDirection()]);
}

//	On défini la vue
$view = 'region'. $oSessions::getRegion() .'/house'. $oSessions::getHouse() .'/floor'. $oSessions::getFloor() .
		'/'. number_format($oSessions::getCoordinate(), 1) .'-'. $oSessions::getDirection() .'.png';

include '../views/game.phtml';