<?php
namespace src\core\html;

class Form{

	public function input($name, $value='', $type = 'text') {

		$value = isset($_POST[$name]) ? $_POST[$name]: $value;

		return '<input class="form-control form-control-lg"
			type="'. $type .'"
			id="'. $name .'"
			name="'. $name .'"
			value="'. $value .'"
		>';
	}

	public function textarea($name, $row = 5){
		$value = isset($_POST[$name]) ? $_POST[$name]: '';
		return '<textarea class="form-control form-control-sm"
			name="'. $name .'" i
			d="'. $name .'"
			rows="'. $row .'"
		>'. $value .'</textarea>';

	}

	public function select($name,$data = [])
	{

		$select = '<select class="form-control form-control-sm" name="' . $name . '" id="' . $name  . '">';
		$select .= '<option value="0" >Choisir...</option>';

		foreach ($data as $key) {
			$selected ='';
			if (isset($_POST[$name]) AND $_POST[$name]== $key['id']) $selected ='selected';
			$select .= '<option value="' . $key['id'] . '" ' . $selected . '>' .$key['name'] . '</option>';
		}
		$select .= '</select>';

		return $select;
	}

	public function day($day)
	{
		$select = '<select class="form-control form-control-sm" name="' . $day . '" id="' . $day  . '">';
		$select .= '<option value="0" >Choisir...</option>';
		for ($i=1; $i <= 31; $i++) {
			$selected ='';
			if (isset($_POST[$day]) AND $_POST[$day]== $i) $selected ='selected';
			$select .= '<option value="' . $i . '" ' . $selected . '>' .$i . '</option>';
		}
		$select .= '</select>';

		return $select;
	}
}
