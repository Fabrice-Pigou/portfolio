<?php
namespace src\core;

class Flash
{

	public static function flash() {
		if (isset($_SESSION['flash'])) {
			$content = '';
			foreach ($_SESSION['flash'] as $flash){
				$content .= '<p class="flashbag flashbag-'. $flash['type'] .'">'. $flash['message'] .'</p>';
			}
			unset($_SESSION['flash']);
			return '
				<div id="message-flash" class="message-flash">
					<span class="flashbag-btn" id="close">Fermer</span>
					<div class="flashbag-content">'. $content .'</div>
				</div>';
		}
	}

	public static function setFlash($message, $type = 'info') {
		if (!isset($_SESSION['flash'])) $_SESSION['flash'] = [];
		array_push($_SESSION['flash'], array(
			'message' => $message,
			'type' => $type
		)
		);
	}

}

// use \src\core\Flash;
// Flash::setFlash('la merde est déja utilisée', 'alert');
