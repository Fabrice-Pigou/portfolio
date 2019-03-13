<?php
use \src\core\html\Form;
use \src\app\sql\Events;
use \src\core\Flash;

$oEvents = new Events;
$oForm = new Form();
$css='<link rel="stylesheet" href="/css/portfolio/calendar.css">';
if (!isset($_POST['id'])) $_POST['id'] = 0;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $i =0;
    /**
     * Vérification du champs NAME
     */
	if (empty($_POST['name'])) {
		$i++;
		Flash::setFlash('Le champs nom est vide', 'alert');
    }
    /**
     * Vérification du champs DAY
     */
    if (empty($_POST['day'])) {
		$i++;
		Flash::setFlash('Le champs jour est vide', 'alert');
    }
    if (\DateTime::createFromFormat('Y-m-d', $_POST['day'] === false) ) {
        $i++;
		Flash::setFlash('Le format du champs jour n\'est pas valide', 'alert');
    }
    /**
     * Vérification des champs START
     */
    if (empty($_POST['start'])) {
        $i++;
        Flash::setFlash('Le champs début est vide', 'alert');
    }
    if (\DateTime::createFromFormat('h:i', $_POST['start'] === false) ) {
        $i++;
        Flash::setFlash('Le format du champs début n\'est pas valid', 'alert');
    }
    /**
     * Vérification des champs END
     */
    if (empty($_POST['end'])) {
		$i++;
		Flash::setFlash('Le champs fin est vide', 'alert');
    }
    if (\DateTime::createFromFormat('h:i', $_POST['end'] === false) ) {
        $i++;
		Flash::setFlash('Le format du champs fin n\'est pas valide', 'alert');
    }
    /**
     * Vérification que START est bien avant END
     */
    if (date_timestamp_get(date_create($_POST['day'] .' '. $_POST['start'] .':00')) > date_timestamp_get(date_create($_POST['day'] .' '. $_POST['end'] .':00'))) {
        $i++;
		Flash::setFlash('L\'heure de fin ne peut pas être avant l\'heure du début', 'alert');
    }
    
	if ($i === 0) {
		if ($_POST['id'] == 0) {
            $oEvents->add($_POST);
            Flash::setFlash('L\'évènement à été ajouté');
            header('location:/calendar/'. (new DateTime($_POST['day']))->format('Y-m'));
            die();
		}
		else{
            $oEvents->update($_POST);
            Flash::setFlash('L\'évènement à été modifié');
            header('location:/calendar/'. (new DateTime($_POST['day']))->format('Y-m'));
            die();
		}
	}
}
if (isset($_GET['action']) && $_GET['action'] === 'edit' && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_POST = $oEvents->getOne($_GET['id']);
    $_POST['day'] = (new DateTime($_POST['start']))->format('Y-m-d');
    $_POST['start'] = (new DateTime($_POST['start']))->format('H:i');
    $_POST['end'] = (new DateTime($_POST['end']))->format('H:i');
}
include '../views/add.phtml';
