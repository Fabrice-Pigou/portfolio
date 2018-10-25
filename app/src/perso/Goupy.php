<?php
namespace app\src\perso;

class Goupy
{
	
	public function getMethod($method)
	{
		switch ($method) {
			case 1:
				$method = 'Carte';
				break;

			case 2:
				$method = 'Chèque';
				break;

			case 3:
				$method = 'Espèce';
				break;

			case 4:
				$method = 'Prélèvement';
				break;

			case 5:
				$method = 'Virement';
				break;
		}

		return $method;
	}

	public function aMethod()
	{
		$method = array(
			array('id' => 1, 'name' =>'Carte'), 
			array('id' => 2, 'name' =>'Chèque'), 
			array('id' => 3, 'name' =>'Espèce'), 
			array('id' => 4, 'name' =>'Prélèvement'), 
			array('id' => 5, 'name' =>'Virement')
		);
		return $method;
	}

	public function families()
	{
		$families = array(
			array('id' => 1, 'name' =>'Dépenses d\'épargne'), 
			array('id' => 2, 'name' =>'Dépenses discrétionnaires'), 
			array('id' => 3, 'name' =>'Dépenses exceptionnelles'), 
			array('id' => 4, 'name' =>'Dépenses fixes'), 
			array('id' => 5, 'name' =>'Dépenses planifiées'),
			array('id' => 6, 'name' =>'Recettes budgétaires'), 
			array('id' => 7, 'name' =>'Recettes exceptionnelles'), 
			array('id' => 8, 'name' =>'Recettes planifiées'), 
			array('id' => 9, 'name' =>'Revenus pro. complémentaires'), 
			array('id' => 10, 'name' =>'Revenus professionnels fixes')
		);
		return $families;
	}
}