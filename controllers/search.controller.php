<?php
use \src\app\sql\Search;

$oSearch = new Search;
$css= '<link rel="stylesheet" href="/css/search.css">';
$script = '<script type="text/javascript" src="/js/search/search.js"></script>';

if (isset($_GET['id'])) {
	$search = $oSearch->getOne($_GET['id']);
}
include '../views/search.phtml';
