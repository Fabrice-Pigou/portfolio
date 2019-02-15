<?php
use \src\app\sql\Search;

$oSearch = new Search;

/**
 * Utilisation de la barre de recherche
 */
if ($_GET['function'] === 'search') {
	$data = $oSearch->getSearch($_GET['value']);
	if ($data) {
		foreach ($data as $name) {
			echo '<li class="no-puce">
					<a href="/search-'. $name['id'] .'">'. htmlentities($name['name']) .'</a>
				</li>';
		}
	}
	else echo ' <li class="no-puce"><a href="">Aucun résultat</a></li>';
}