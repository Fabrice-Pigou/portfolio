<?php
$title = ' | Goupy.eu';
function vd(...$vars){
	foreach ($vars as $var) {
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
}

function nh(string $value){
	if ($value === null) return '';
	return nl2br(htmlentities($value));
}

function hh(string $value){
	if ($value === null) return '';
	return htmlentities($value);
}