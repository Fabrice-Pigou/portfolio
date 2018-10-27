<?php
use src\core\html\Form;
use src\app\perso\Goupy;
$oForm = new Form;
$oGoupy = new Goupy;

if (isset($_POST['lunh'])) {
    $lunh = $oGoupy->isLuhnNum($_POST['lunh']);

    if ($lunh == 0) {
        $message = '<h3 class="text-center green">Le numéros est valide</h3>';
    }
    else {
        $message = '<h3 class="text-center red">Le numéros n\'est pas valide</h3>';
    }
}

include '../views/luhn.phtml';
