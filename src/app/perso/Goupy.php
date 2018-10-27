<?php
namespace src\app\perso;

class Goupy
{

	function isLuhnNum($num)
	{
		$total = 0;
		$aNum = str_split(strrev($num));	// Transforme en "array" et inverse les chiffres
		foreach ($aNum as $key => $value)
		{
			if ($key %2 == 1)	// pour chaque $key impair
			{
				if (($value * 2) > 9) $total += ($value * 2) - 9;	// Il est superieur à 9 on lui enlève 9
				else $total += ($value * 2);	// On ajoute au total
			}
			else $total += $value;
		}
		return $total % 10;	// le total doit être un multiple de 10
	}
}
