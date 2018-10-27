<?php
namespace src\core;

class Goupy
{
	public function bbcode($text)
	{
		$text = htmlspecialchars($text);
		$text = nl2br($text);

		//	Formatage du text
		$text = preg_replace('#\[t\](.+)\[/t\]#isU', '<h4>$1</h4>', $text);
		$text = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $text);

		//	Les couleur
		$text = preg_replace('#\[bleu\](.+)\[/bleu\]#isU', '<span class="bbcode-bleu">$1</span>', $text);
		$text = preg_replace('#\[rouge\](.+)\[/rouge\]#isU', '<span class="bbcode-rouge">$1</span>', $text);
		$text = preg_replace('#\[vert\](.+)\[/vert\]#isU', '<span class="bbcode-vert">$1</span>', $text);
		$text = preg_replace('#\[rose\](.+)\[/rose\]#isU', '<span class="bbcode-rose">$1</span>', $text);

		return $text;
	}

	public static function month($month)
	{
		switch ($month) {
			case 1:  $month = 'Janvier';   break;
			case 2:  $month = 'Février';   break;
			case 3:  $month = 'Mars';      break;
			case 4:  $month = 'Avril';     break;
			case 5:  $month = 'Mai';       break;
			case 6:  $month = 'Juin';      break;
			case 7:  $month = 'Juillet';   break;
			case 8:  $month = 'Août';	   break;
			case 9:  $month = 'Septembre'; break;
			case 10: $month = 'Octobre';   break;
			case 11: $month = 'Novembre';  break;
			case 12: $month = 'Decembre';  break;
		}
		return $month;
	}
}
