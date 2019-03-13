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

function vide($truc){
    if (empty($truc)) return 0;
    else return $truc;
}

function admin($north, $south, $est, $west, $i = 0){
	if(empty($north) && empty($south) && empty($est) && empty($west)) {
        $a = [
            'n' => $i,
            's' => $i,
            'e' => $i,
            'w' => $i
        ];
    }
    else{
        $a = [
            'n' => vide($north),
            's' => vide($south),
            'e' => vide($est),
            'w' => vide($west)
        ];
	}
	return json_encode($a);
}