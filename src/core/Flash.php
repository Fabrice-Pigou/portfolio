<?php
namespace src\core;

class Flash
{

	public static function flash() {
		if (isset($_SESSION['flash'])) {
			extract($_SESSION['flash']);
			unset($_SESSION['flash']);
			return '<div id="message-flash" class="alert alert-'.$type.' container mb-0" role="alert">
						<span class="btn btn-sm btn-'.$type.'" id="close">Fermer</span>
						'. $message .'
					</div>';
		}
	}

	public static function setFlash($message, $type = 'primary') {
		 $_SESSION['flash']['message'] = $message;
		 $_SESSION['flash']['type'] = $type;
	}

}

// use \src\core\Flash;
// Flash::setFlash('la marque est déja utilisée', 'alert');
